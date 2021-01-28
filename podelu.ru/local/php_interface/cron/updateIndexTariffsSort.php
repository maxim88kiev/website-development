#!/usr/bin/php
<?php
$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../..';
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

if(php_sapi_name() !== 'cli'){
    exit();
}

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
set_time_limit(0);

\Bitrix\Main\Loader::includeModule('highloadblock');
\Bitrix\Main\Loader::includeModule('iblock');

use \Bitrix\Highloadblock\HighloadBlockTable as HLBT;


//симв. коды свойств учавствующих в вычислении индекса сортировки
$PROPS_FOR_INDEX = [
    "PROPERTY_ACCOUNT_PAYMENT_INTERVAL", //Плата за обслуживание
    "PROPERTY_PEOPLE_TRANSFER_INTERVAL" , //Переводы ФЛ в рублях
    "PROPERTY_CASH_OUT_SELF_INTERVAL" , //Снятие наличных через устройства самообслуживания
    "PROPERTY_BUSINESS_TRANSFER_TELECOM_INTERVAL" //Межбанковские переводы ЮЛ через интернет и мобильный банк
];


$FACET_PROPS_COUNT_PAYMENTS = [
    0 => [
        "FROM" => 0,
        "TO" => 5
    ],
    1 => [
        "FROM" => 6,
        "TO" => 15
    ],
    2 => [
        "FROM" => 16,
        "TO" => 30
    ],
    3 => [
        "FROM" => 31,
        "TO" => 100
    ],
    4 => [
        "FROM" => 100,
        "TO" => INFINITE_NUMBER
    ]
];
$FACET_PROPS_CASH_OUTS = [
    0 => [
        "FROM" => 0,
        "TO" => 50000
    ],
    1 => [
        "FROM" => 50000,
        "TO" => 100000
    ],
    2 => [
        "FROM" => 100000,
        "TO" => 500000
    ],
    3 => [
        "FROM" => 500000,
        "TO" => INFINITE_NUMBER
    ]
];

$FACET_PROPS_PEOPLE_TRANSFERS = [
    0 => [
        "FROM" => 0,
        "TO" => 150000
    ],
    1 => [
        "FROM" => 150000,
        "TO" => 300000
    ],
    2 => [
        "FROM" => 300000,
        "TO" => 500000
    ],
    3 => [
        "FROM" => 500000,
        "TO" => INFINITE_NUMBER
    ]
];

$rsTariffs = CIBlockElement::GetList([] ,
    [
        "IBLOCK_ID" => TARIFF_IBLOCK_ID,
        "ACTIVE" => "Y",
    ]
);

//логические функции

//есть все значения в свойстве
function isFullInterval($val) {
    return isset($val['FROM']) && isset($val['TO']) && isset($val['PERCENT']);
}

function isOnlyPercent($val) {
    return !isset($val['FROM']) && !isset($val['TO']) && isset($val['PERCENT']);
}

function isOnePercentPayment($values){
    $result = false;
    if(!empty($values)){
        foreach ($values as $val) {
            if($val['ONE_PERCENT']){
                $result = true;
                break;
            }
        }
    }
    return $result;
}

function isTail($val) {
    return ($val['FROM'] && !$val['TO'] && $val['PERCENT']);
}

function isCashOutProp($propCode){
    return in_array($propCode , ["PROPERTY_ACCOUNT_PAYMENT_INTERVAL" ,"PROPERTY_PEOPLE_TRANSFER_INTERVAL" , "PROPERTY_CASH_OUT_SELF_INTERVAL"]);
}

function isCashInProp($propCode){
    return in_array($propCode , ["PROPERTY_CASH_IN_SELF_INTERVAL"]);
}

//попадаем в диапазон фильтра
function isCheckTopLimit($fromTariff , $midIntervalValue){
    return $fromTariff < $midIntervalValue;
}

function updateTariffIndexData($data){
    $hlblock   = HLBT::getById( HLBT_TARIFF_INDEX_TABLE_ID )->fetch();
    $entity   = HLBT::compileEntity( $hlblock );
    $entity_data_class = $entity->getDataClass();

    $res = $entity_data_class::add($data);

    if (!$res->isSuccess()) {
        echo 'Ошибка: ' . implode(', ', $res->getErrors()) . "";
    }
}

function cleanTariffIndexTable() {
    global $DB;
    $DB->Query("TRUNCATE tariff_search_index;");
}

function calculateIndexForProp($facetInterval ,  $propName , $element){
    $index = 0;
    if($element["PROPERTIES"][$propName]['VALUE']){
        $midPocket = ceil(($facetInterval['TO'] + $facetInterval['FROM'])/2);
        if($facetInterval['TO'] == INFINITE_NUMBER){
            $midPocket = $facetInterval['FROM'];
        }
        $isTail = false;
        foreach ($element["PROPERTIES"][$propName]['VALUE'] as $propValue) {
            if($isTail){
                $index += ceil($midPocket*((float)$propValue['PERCENT'])/100);
                break;
            }

            if(isFullInterval($propValue)){
                if(($midPocket >= floatval($propValue['TO'])) || ($midPocket >= floatval($propValue['FROM']) && $midPocket <= floatval($propValue['TO']))){
                    $index += ceil($midPocket*((float)$propValue['PERCENT'])/100);
                    $midPocket -= ((float)$propValue['TO'] - (float)$propValue['FROM']);
                    if($midPocket < (float)$propValue['TO'] && $midPocket > 0)
                        $isTail = true;
                }
            } else if(isOnlyPercent($propValue)) {
                $index += ceil($midPocket*((float)$propValue['PERCENT'])/100);
            }
        }
    }
    return $index;
}

function calculateIndexForTransferUL($facetInterval ,  $propName , $element){
    $index = 0;
    if($element["PROPERTIES"][$propName]['VALUE']){
        $midPocket = ceil(($facetInterval['TO'] + $facetInterval['FROM'])/2);
        if($facetInterval['TO'] == INFINITE_NUMBER){
            $midPocket = $facetInterval['FROM'];
        }

        if($element["PROPERTIES"][$propName]['VALUE']){
            $countFreePayments = 0;
            $payPerItem = 0;
            foreach ($element["PROPERTIES"][$propName]['VALUE'] as $propValue) {
                if($propValue['COUNT_FREE_PAY'] && $midPocket >= $propValue['COUNT_FREE_PAY']){
                    $countFreePayments = (int)$propValue['COUNT_FREE_PAY'];
                }

                if($propValue['PAY_PER_ITEM']){
                    $payPerItem = $propValue['PAY_PER_ITEM'];
                }
            }

            if($payPerItem && $countFreePayments && ($midPocket > $countFreePayments)){
                $index = $payPerItem*($midPocket - $countFreePayments);
            } else if($payPerItem && !$countFreePayments){
                $index = $payPerItem*$midPocket;
            } else if($payPerItem && $countFreePayments && ($midPocket == $countFreePayments)){
                $index = $payPerItem;
            }
        }

    }
    return $index;
}

function calculateIndexForPercentFromSumm($facetPeopleTransfer , $facetCashOut , $propValues){
    $cashOutMid = ceil(($facetCashOut['TO'] + $facetCashOut['FROM'])/2);
    $transfersMid = ceil(($facetPeopleTransfer['TO'] + $facetPeopleTransfer['FROM'])/2);
    $index = 0;
    if(!empty($propValues)){
        foreach ($propValues as $val) {
            if($val['ONE_PERCENT']){
                $index = ceil((($cashOutMid + $transfersMid)*2*2)*((float)$val['ONE_PERCENT']/100));
            }
        }
    }
    return $index;
}

cleanTariffIndexTable();

$i = 0;
$cacheTariffs = [];

$rsTariffs = CIBlockElement::GetList([] , [
    "IBLOCK_ID" => TARIFF_IBLOCK_ID,
    "ACTIVE" => "Y",
]);


while ($rsTariff = $rsTariffs->GetNextElement()){
    $element = $rsTariff->GetFields();
    $element['PROPERTIES'] = $rsTariff->GetProperties();

    foreach ($FACET_PROPS_COUNT_PAYMENTS as $FACET_PROPS_COUNT_PAYMENT) {
        foreach ($FACET_PROPS_CASH_OUTS as $FACET_PROPS_CASH_OUT) {
            foreach ($FACET_PROPS_PEOPLE_TRANSFERS as $FACET_PROPS_PEOPLE_TRANSFER) {
                $summCashOutFilter = calculateIndexForProp($FACET_PROPS_CASH_OUT , "PROPERTY_CASH_OUT_SELF_INTERVAL" , $element);
                $summTransferFilter = calculateIndexForProp($FACET_PROPS_PEOPLE_TRANSFER , "PROPERTY_PEOPLE_TRANSFER_INTERVAL" , $element);
                $summTransferULFilter = calculateIndexForTransferUL($FACET_PROPS_COUNT_PAYMENT , "PROPERTY_BUSINESS_TRANSFER_TELECOM_INTERVAL" , $element);
                $summCoefFilter = 0;

                //прибавляем плату за обслуживание
                if($element["PROPERTIES"]["PROPERTY_ACCOUNT_PAYMENT_INTERVAL"]['VALUE']){
                    if(!isOnePercentPayment($element["PROPERTIES"]["PROPERTY_ACCOUNT_PAYMENT_INTERVAL"]['VALUE'])){
                        $firstItem = reset($element["PROPERTIES"]["PROPERTY_ACCOUNT_PAYMENT_INTERVAL"]['VALUE']);
                        $summCoefFilter += floatval($firstItem['FROM']);
                    } else {
                        $summCoefFilter += calculateIndexForPercentFromSumm($FACET_PROPS_PEOPLE_TRANSFER , $FACET_PROPS_CASH_OUT , $element["PROPERTIES"]["PROPERTY_ACCOUNT_PAYMENT_INTERVAL"]['VALUE']);
                    }
                }
                //Дополнительно добавляем процент, аналогично плате за обслуживание , для переводов ЮЛ
                if($element["PROPERTIES"]["PROPERTY_BUSINESS_TRANSFER_TELECOM_INTERVAL"]['VALUE']){
                    if(isOnePercentPayment($element["PROPERTIES"]["PROPERTY_BUSINESS_TRANSFER_TELECOM_INTERVAL"]['VALUE'])){
                        $summCoefFilter += calculateIndexForPercentFromSumm($FACET_PROPS_PEOPLE_TRANSFER , $FACET_PROPS_CASH_OUT , $element["PROPERTIES"]["PROPERTY_BUSINESS_TRANSFER_TELECOM_INTERVAL"]['VALUE']);
                    }
                }

                $summCoefFilter += ($summTransferFilter + $summCashOutFilter + $summTransferULFilter);

                $data = [
                    "UF_TARIFF_ID" => intval($element['ID']),
                    "UF_INDEX_SORT" => $summCoefFilter,
                    "UF_COUNT_PAY_FROM" => $FACET_PROPS_COUNT_PAYMENT['FROM'],
                    "UF_COUNT_PAY_TO" => $FACET_PROPS_COUNT_PAYMENT['TO'],
                    "UF_CASH_OUT_TO" => $FACET_PROPS_CASH_OUT['TO'],
                    "UF_CASH_OUT_FROM" => $FACET_PROPS_CASH_OUT['FROM'],
                    "UF_TRANSFER_TO" => $FACET_PROPS_PEOPLE_TRANSFER['TO'],
                    "UF_TRANSFER_FROM" => $FACET_PROPS_PEOPLE_TRANSFER['FROM'],
                    "UF_BANK_ID" => (int)$element["PROPERTIES"]["PROPERTY_BANK"]["VALUE"],
                    "UF_TARIFF_INT_ID" => intval($element['ID']),
                ];

                updateTariffIndexData($data);
                $i++;
            }
        }
    }
}



echo $i;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
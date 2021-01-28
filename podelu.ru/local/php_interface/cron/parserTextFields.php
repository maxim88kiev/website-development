#!/usr/bin/php
<?php
$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../..';
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

if(php_sapi_name() !== 'cli'){
    exit();
}

const PREG_POCKET_PATTERN_COMMON = "/от\s+(?P<FROM>[0-9,.]+\s+(руб|тыс.|млн\s+руб|тыс.\s+руб)?)\s*до\s+(?P<TO>[0-9,.]+\s+(тыс.|млн\s+руб|тыс.\s+руб))\s*(в месяц\s+)?—\s+(?P<PERCENT>[0-9,.]+)%(\s+от\s+суммы)?/";
const PREG_POCKET_PATTERN_ALT = "/от\s+(?P<FROM>[0-9,.]+\s+(руб|млн|тыс.|млн\s+руб|тыс.\s+руб)?)\s?до\s?(?P<TO>[0-9,.]+\s+(тыс.|млн|млн\s+руб(\/мес)?|тыс.\s*руб(\/мес)?))\s+(в месяц\s+)?—\s+(?P<PERCENT>[0-9,.]+)%(\s+от\s+суммы)?/";
const PREG_POCKET_PATTERN_ALT_1 = "/от\s+(?P<FROM>[0-9,.]+\s+(руб|млн|тыс.|млн\s+руб|тыс.\s+руб)?)\s?до\s?(?P<TO>[0-9,.]+\s+(тыс.|млн\s+руб|тыс.\s+руб))\s+(в месяц\s+)?—\s+(?P<PERCENT>[0-9,.]+)%(\s+от\s+суммы)?/";
const PREG_POCKET_PATTERN_ALT_2 = "/от\s+(?P<FROM>[0-9,.]+\s+(руб|млн|тыс.|млн\s+руб|тыс.\s+руб)?)\s*до\s*(?P<TO>[0-9,.]+\s+(тыс.|млн\s+руб|тыс.\s+руб))\s+(в месяц\s+)?—\s+(?P<PERCENT>[0-9,.]+)%(\s+от\s+суммы)?/";
const PREG_POCKET_PATTERN_ALT_INDIVIDUALLY = "/^от\s+(?P<FROM>[0-9,.]+\s+(руб|млн|тыс\.?|млн\.?\s*руб(\/мес)?|тыс\.?\s*руб(\/мес)?)?)\s+до\s+(?P<TO>[0-9,.]+\s+(тыс.|млн|млн\.?\s+руб(\/мес)?|тыс.\s*руб(\/мес)?))\s*—?\s*(?P<INDIVIDUALLY>индивидуально)$/";
const PREG_POCKET_PATTERN_ALT_PAY_PER_ITEM = "/от\s+(?P<FROM>[0-9,.]+\s+(руб|тыс.|млн\s+руб|тыс.\s+руб)?)\s*до\s+(?P<TO>[0-9,.]+\s+(тыс.|млн\s+руб|тыс.\s*руб))\s+(в месяц\s+)?—\s+(?P<PERCENT>[0-9,.]+)\s*руб\/шт/";
const PREG_POCKET_PATTERN_FREE = "/от\s+(?P<FROM>[0-9,.]+\s*(руб|тыс.|млн|млн\s*руб|тыс.\s*руб)?)\s+до\s+(?P<TO>[0-9,.]+\s+(млн\.?(\s*руб)?(\/мес)?|тыс\.?\s*руб(\/мес)?|тыс\.?))\s*(в мес(яц)?)?(\s+—)?\s+бесплатно/";
const PREG_POCKET_PATTERN_MORE = "/^\[?(свыше|от)\s+(?P<FROM>[0-9,.]+\s+(тыс.|млн|млн\s+руб|тыс.\s*руб))\s*—\s*(?P<PERCENT>[0-9,.]+)%(\s+от\s+суммы)?\]?$/";
const PREG_POCKET_PATTERN_MORE_ALT = "/^(свыше|от)\s+(?P<FROM>[0-9,.]+\s+(руб\.?|тыс\.?|млн|млн\.?\s+руб(\/мес)?|тыс\.?\s*руб(\/мес)?))\s+(в месяц)?\s*—\s*(?P<PERCENT>[0-9,.]+)%(\s+от\s+суммы)?$/";
const PREG_POCKET_PATTERN_INDIVIDUALLY = "/^(свыше|от)\s+(?P<FROM>[0-9,.]+\s+(руб\.?|тыс\.?|млн|млн\.?\s+руб(\/мес)?|тыс\.?\s*руб(\/мес)?))\s+(в месяц)?\s*—?\s*(?P<INDIVIDUALLY>индивидуально)$/";
const PREG_POCKET_PATTERN_SUM = "/^(от\s+)?(?P<PERCENT>[0-9,.]+)%\s+от\s+суммы/";
const PREG_POCKET_PATTERN_ALT_SUM = "/^(от\s+)?(?P<FROM>[0-9,.]+\s+(тыс.|млн|млн\s+руб|тыс.\s*руб))\s*—\s*(?P<PERCENT>[0-9,.]+)%\s+от\s+суммы/";
const PREG_POCKET_PATTERN_PAYMENT = "/^(?P<FROM>[0-9 ]+\s*(тыс\.?\s*)?руб(\/мес)?)$/";
const PREG_POCKET_PATTERN_NOT_LESS = "/^но не меньше (?P<LESS_TO>[0-9,. ]+)\s*((млн\s*|тыс\.?\s*)?руб)/";
const PREG_PATTERN_MONEY_FORMAT = "/[0-9,. ]+\s+(руб|млн\.?(\s*руб(\/мес)?)?|тыс\.?(\s*руб(\/мес)?)?)/";
const PREG_PATTERN_MONEY_FORMAT_FOR_PARSE = "/[0-9,. ]+\s+(?P<MONEY>руб|млн|тыс\.?|млн\s+руб|тыс\.?\s+руб)/";
const PREG_PATTERN_PAYMENT_PER_MONTH_FORMAT = "/^при оплате за 3 месяц(а|ев)\s*—\s*(?P<FROM>[0-9&nbsp; ]+((тыс.\s*|млн\s*)?руб))/";
const PREG_PATTERN_FREE_EMPTY = "/^бесплатно/";
const PREG_PATTERN_PAY_PER_ITEM = "/^(далее\s+)?(?P<PAY_PER_ITEM>[0-9 ]+)\s*руб\/шт$/";
const PREG_PATTERN_PAY_PER_ITEM_FREE_PAYMENTS = "/^(При открытии\s+)?(?P<COUNT_FREE_PAY>[0-9]+)\s+бесплатно$/";
const PREG_PATTERN_ONE_PERCENT_ACCOUNT_PAYMENT = "/^(далее\s+)?(?P<PERCENT_PAYMENT>[0-9,]+)%(\s+от)?(\s+суммы)?(\s+поступлений)?$/";

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require_once 'parserTextFields/functions.php';
set_time_limit(0);

$rsTariffs = CIBlockElement::GetList([] , [
    "IBLOCK_ID" => 2,
    "ACTIVE" => "Y",
]);

$el = new CIBlockElement;
while($rsTariff = $rsTariffs->GetNextElement()){
    $arTariffFields = $rsTariff->GetFields();
    $arTariffProps = $rsTariff->GetProperties();

    if($arTariffProps) {
        foreach ($arTariffProps as $codeProp => $arTariffProp) {
            if($arTariffProp['MULTIPLE'] == "Y" && !preg_match("/.*_INTERVAL$/" , $codeProp) && !empty($arTariffProp['VALUE'])){
                foreach ($arTariffProp['VALUE'] as $val) {
                    $matches = parsePocket($val);
                    $values = prepareMatches($matches);

                    if($values) {
                        $valuesForUpdate[$codeProp . '_INTERVAL'][] = $values;
                    }
                }

                $pocketProp = CIBlockProperty::GetList([] , ['CODE' => $codeProp . '_INTERVAL'])->Fetch();

                if($pocketProp && $valuesForUpdate) {
                    if($codeProp == 'PROPERTY_ACCOUNT_PAYMENT' && count($valuesForUpdate[$arTariffProp['CODE'].'_INTERVAL']) > 1){
                        unset($valuesForUpdate[$codeProp.'_INTERVAL'][1]);
                    }
                    CIBlockElement::SetPropertyValuesEx($arTariffFields['ID'] , $arTariffFields['IBLOCK_ID'] , $valuesForUpdate);
                    $valuesForUpdate = [];
                }

            }
        }
    }
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
<?php

function prepareString($str) {
    if(strpos($str , ',') !== false){
        $str = str_replace(',' , '.' , $str);
    }
    if(strpos($str , '&nbsp;') !== false){
        $str = str_replace('&nbsp;' , '' , $str);
    }
    return trim($str);
}

function calculatePaymentPerMonth($val) {
    $matches = [];
    preg_match_all(PREG_PATTERN_PAYMENT_PER_MONTH_FORMAT, $val, $matches);
    $paymentPerMonth = ceil(convertToNumber(reset($matches['FROM']))/3);
    $matches['FROM'] = [];
    $matches['FROM'][] = $paymentPerMonth;
    return $matches;
}

function prepareMatches($matches){
    $values = [];
    $pocketMoneyFormat = '';

    //фикс случаев когда у одной границы диапазона кармана есть сокращение (млн,тыс), а у другого нет. Берем сокращение от второй границы(TO)
    //нужно для правильной записи цифрового значения в карман
    if(isset($matches['FROM'][0]) && isset($matches['TO'][0]) && trim($matches['FROM'][0]) !== "0"
        && !preg_match(PREG_PATTERN_MONEY_FORMAT , $matches['FROM'][0])
        && preg_match(PREG_PATTERN_MONEY_FORMAT , $matches['TO'][0])
    ){
        preg_match_all(PREG_PATTERN_MONEY_FORMAT_FOR_PARSE , $matches['TO'][0] , $matchesFormat);
        $pocketMoneyFormat = $matchesFormat['MONEY'][0];
    }

    foreach ($matches as $k => $match) {
        if($k && in_array($k , ['FROM' , 'TO' , 'PERCENT' , 'LESS_TO' , 'PAY_PER_ITEM' , 'COUNT_FREE_PAY' , 'ONE_PERCENT' , 'INDIVIDUALLY'])) {
            $stringForPrepare = reset($matches[$k]);
            if($pocketMoneyFormat && $k == 'FROM'){
                $stringForPrepare .= ' '.$pocketMoneyFormat;
            }
            $val = (isset($matches[$k]))?convertToNumber($stringForPrepare):'';
            $values['VALUE'][$k] = $val;
        }
    }
    return $values;
}

function parsePocket($val){
    $val = trim($val);
    $matches = [];
    if(preg_match(PREG_POCKET_PATTERN_COMMON , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_COMMON, $val, $matches);
    } else if(preg_match(PREG_PATTERN_ONE_PERCENT_ACCOUNT_PAYMENT , $val)) {
        preg_match_all(PREG_PATTERN_ONE_PERCENT_ACCOUNT_PAYMENT, $val, $matches);
        $percentPayment = $matches['PERCENT_PAYMENT'][0];
        $matches = [];
        $matches['ONE_PERCENT'][] = str_replace(',', '.', $percentPayment);
    } else if(preg_match(PREG_POCKET_PATTERN_ALT , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_ALT, $val, $matches);
        if (!preg_match(PREG_PATTERN_MONEY_FORMAT, $matches['FROM'][0]) && trim($matches['FROM'][0]) !== "0") {
            preg_match_all(PREG_PATTERN_MONEY_FORMAT_FOR_PARSE, $matches['TO'][0], $mcs);
            if ($mcs['MONEY']) {
                $matches['FROM'][0] = $matches['FROM'][0] . ' ' . $mcs['MONEY'][0];
            }
        }
    } else if(preg_match(PREG_POCKET_PATTERN_ALT_1 , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_ALT_1, $val, $matches);
        if (!preg_match(PREG_PATTERN_MONEY_FORMAT, $matches['FROM'][0]) && trim($matches['FROM'][0]) !== "0") {
            preg_match_all(PREG_PATTERN_MONEY_FORMAT_FOR_PARSE, $matches['TO'][0], $mcs);
            if ($mcs['MONEY']) {
                $matches['FROM'][0] = $matches['FROM'][0] . ' ' . $mcs['MONEY'][0];
            }
        }
    } else if(preg_match(PREG_POCKET_PATTERN_ALT_2 , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_ALT_2, $val, $matches);
        if(!preg_match(PREG_PATTERN_MONEY_FORMAT , $matches['FROM'][0]) && trim($matches['FROM'][0]) !== "0"){
            preg_match_all(PREG_PATTERN_MONEY_FORMAT_FOR_PARSE , $matches['TO'][0] , $mcs);
            if($mcs['MONEY']) {
                $matches['FROM'][0] = $matches['FROM'][0].' '.$mcs['MONEY'][0];
            }
        }

    } else if(preg_match(PREG_POCKET_PATTERN_ALT_INDIVIDUALLY , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_ALT_INDIVIDUALLY, $val, $matches);
        if($matches['INDIVIDUALLY']){
            $matches['INDIVIDUALLY'][0] = 1;
        }
    } else if(preg_match(PREG_POCKET_PATTERN_INDIVIDUALLY , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_INDIVIDUALLY, $val, $matches);
        if($matches['INDIVIDUALLY']){
            $matches['INDIVIDUALLY'][0] = 1;
        }

    } else if(preg_match(PREG_POCKET_PATTERN_SUM , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_SUM, $val, $matches);
    } else if(preg_match(PREG_POCKET_PATTERN_ALT_SUM , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_ALT_SUM, $val, $matches);
    } else if(preg_match(PREG_POCKET_PATTERN_MORE_ALT , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_MORE_ALT, $val, $matches);
    } else if(preg_match(PREG_POCKET_PATTERN_FREE , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_FREE , $val , $matches);
        $matches['PERCENT'][] = 0;
    } else if(preg_match(PREG_POCKET_PATTERN_ALT_PAY_PER_ITEM , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_ALT_PAY_PER_ITEM , $val , $matches);
        $payPerItem = reset($matches['PERCENT']);
        $matches['PERCENT'] = [];
        $matches['PERCENT'][] = round((float)$payPerItem/1000 , 2);
    } else if(preg_match(PREG_POCKET_PATTERN_MORE , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_MORE , $val , $matches);
    } else if(preg_match(PREG_POCKET_PATTERN_PAYMENT , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_PAYMENT , $val , $matches);
    } else if(preg_match(PREG_POCKET_PATTERN_NOT_LESS , $val)) {
        preg_match_all(PREG_POCKET_PATTERN_NOT_LESS, $val, $matches);
    } else if(preg_match(PREG_PATTERN_PAY_PER_ITEM , $val)) {
        preg_match_all(PREG_PATTERN_PAY_PER_ITEM, $val, $matches);
    } else if(preg_match(PREG_PATTERN_PAY_PER_ITEM_FREE_PAYMENTS , $val)) {
        preg_match_all(PREG_PATTERN_PAY_PER_ITEM_FREE_PAYMENTS, $val, $matches);
    } else if(preg_match(PREG_PATTERN_PAYMENT_PER_MONTH_FORMAT , $val)) {
        $matches = calculatePaymentPerMonth($val);
    } else if(preg_match(PREG_PATTERN_FREE_EMPTY , $val)) {
        $matches['FROM'][] = 0;
    }

    return $matches;
}

function convertToNumber($str) {
    $str = prepareString($str);
    if(preg_match("/(\s+)?[0-9., ]+\s*тыс\.?(\s+руб)?(\/мес)?/" , $str)){
        preg_match_all("/(\s+)?(?P<NUMBER>[0-9., ]+)\s*тыс\.?(\s+руб)?(\/мес)?/" , $str , $matches);
        $number = str_replace(' ' , '' , reset($matches['NUMBER']));
        $v = floatval($number)*1000;
    } else if(preg_match("/(\s+)?[0-9., ]+\s*млн(\s+руб)?/" , $str)) {
        preg_match_all("/(\s+)?(?P<NUMBER>[0-9., ]+)\s*млн(\s+руб)?/" , $str , $matches);
        $number = str_replace(' ' , '' , reset($matches['NUMBER']));
        $v = floatval($number)*1000000;
    } else if(preg_match("/(\s+)?[0-9., ]+\s+руб/" , $str)) {
        preg_match_all("/(\s+)?(?P<NUMBER>[0-9., ]+)\s+руб/" , $str , $matches);
        $number = str_replace(' ' , '' , reset($matches['NUMBER']));
        $v = $number;
    } else {
        $number = str_replace(' ' , '' , $str);
        $v = (float)$number;
    }
    return $v;
}
<? 
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    function stepToValue($step) {
        $step = intval($step);
        if ($step <= 10) {
            return $step;
        }

        if ($step >= 100) {
            return 19;
        }

        return ($step / 10) + 9;
    }

    
    // Заголовок блока
    $arResult['TITLE'] = $arParams['PAYMENT_TITLE'];
    // Минимальное кол-во платежей
    $arResult['MIN'] = intval($arParams['PAYMENT_MIN']);
    // Максимальное кол-во платежей
    $arResult['MAX'] = intval($arParams['PAYMENT_MAX']);
    // Шаг для ползунка
    $arResult['STEP'] = intval($arParams['PAYMENT_STEP']);
    // Начальное значение
    $arResult['START'] = stepToValue($arParams['PAYMENT_START']);

    $this->IncludeComponentTemplate();
?>
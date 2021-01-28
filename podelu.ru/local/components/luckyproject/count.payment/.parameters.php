<? 
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    $arComponentParameters = array(
        "GROUPS" => array(),
        "PARAMETERS" => array(
            "PAYMENT_TITLE" => array(
                "PARENT" => "BASE",
                "NAME" => "Заголовок блока",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "Оцените все преимущества обслуживания в банке",
            ),
            "PAYMENT_MIN" => array(
                "PARENT" => "BASE",
                "NAME" => "Минимальное кол-во платежей",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "10",
            ),            
            "PAYMENT_MAX" => array(
                "PARENT" => "BASE",
                "NAME" => "Максимальное кол-во платежей",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "100",
            ),
            "PAYMENT_STEP" => array(
                "PARENT" => "BASE",
                "NAME" => "Шаг",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "10",
            ),
            "PAYMENT_START" => array(
                "PARENT" => "BASE",
                "NAME" => "Начальное значение",
                "TYPE" => "STRING",
                "MULTIPLE" => "N",
                "DEFAULT" => "30",
            )
        )
    );
?>
<?php

CModule::IncludeModule("iblock");


AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('CUserIntervalProperty', 'GetUserTypeDescription'));

class CUserIntervalProperty
{
    function GetUserTypeDescription()
    {
        return array(
            'PROPERTY_TYPE' => 'S',
            'USER_TYPE' => 'intervals_percent',
            'DESCRIPTION' => 'Карман',
            'GetPropertyFieldHtml' => array('CUserIntervalProperty', 'GetPropertyFieldHtml'),
            'ConvertToDB' => array('CUserIntervalProperty', 'ConvertToDB'),
            'ConvertFromDB' => array('CUserIntervalProperty', 'ConvertFromDB')
        );
    }

    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        ob_start();

        ?>
        <div style="display: flex;">
            <span>От:<input type="text" size="3" value="<?= $value['VALUE']['FROM'] ?>"
                            name="<?= $strHTMLControlName['VALUE'] ?>[FROM]"></span>
            <span>До:<input type="text" size="3" value="<?= $value['VALUE']['TO'] ?>"
                            name="<?= $strHTMLControlName['VALUE'] ?>[TO]"></span>
            <span>Процент:<input type="text" size="3" value="<?= $value['VALUE']['PERCENT'] ?>"
                                 name="<?= $strHTMLControlName['VALUE'] ?>[PERCENT]"></span>
            <span>Не менее:<input type="text" size="3" value="<?= $value['VALUE']['LESS_TO'] ?>"
                                  name="<?= $strHTMLControlName['VALUE'] ?>[LESS_TO]"></span>
            <span>Кол-во бесплатных платежей:<input type="text" size="3"
                                                    value="<?= $value['VALUE']['COUNT_FREE_PAY'] ?>"
                                                    name="<?= $strHTMLControlName['VALUE'] ?>[COUNT_FREE_PAY]"></span>
            <span>Стоимость за один платеж:<input type="text" size="3" value="<?= $value['VALUE']['PAY_PER_ITEM'] ?>"
                                                  name="<?= $strHTMLControlName['VALUE'] ?>[PAY_PER_ITEM]"></span>
            <span>% от суммы поступлений:<input type="text" size="3" value="<?= $value['VALUE']['ONE_PERCENT'] ?>"
                                                name="<?= $strHTMLControlName['VALUE'] ?>[ONE_PERCENT]"></span>
            <span>Индивидуально:<input type="text" size="3" value="<?= $value['VALUE']['INDIVIDUALLY'] ?>"
                                       name="<?= $strHTMLControlName['VALUE'] ?>[INDIVIDUALLY]"></span>
        </div>
        <?
        $return = ob_get_contents();
        ob_end_clean();
        return $return;

    }

    function ConvertToDB($arProperty, $value)
    {
        $return = false;

        if (static::isValidValue($value['VALUE'])) {
            $return['VALUE'] = serialize($value['VALUE']);

            if (trim($value["DESCRIPTION"]) != '') {
                $return["DESCRIPTION"] = trim($value["DESCRIPTION"]);
            }
        }

        return $return;
    }

    function ConvertFromDB($arProperty, $value)
    {
        $return = false;

        if (isset($value['VALUE'])) {
            $return['VALUE'] = unserialize($value['VALUE']);

            if ($value["DESCRIPTION"]) {
                $return["DESCRIPTION"] = trim($value["DESCRIPTION"]);
            }
        }

        return $return;
    }

    public static function isValidValue($value)
    {
        return
            static::isValid($value["TO"]) ||
            static::isValid($value["FROM"]) ||
            static::isValid($value["PERCENT"]) ||
            static::isValid($value["LESS_TO"]) ||
            static::isValid($value["COUNT_FREE_PAY"]) ||
            static::isValid($value["PAY_PER_ITEM"]) ||
            static::isValid($value["ONE_PERCENT"]) ||
            static::isValid($value["INDIVIDUALLY"]);
    }

    public static function isValid($str)
    {
        return trim($str) !== '';
    }
}

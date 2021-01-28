<?php
namespace AMBase\Podelu;

use Bitrix\Main\Application;

class EventHandler
{
    public function OnEndBufferContent(&$content)
    {
        $arUri = parse_url($_SERVER['REQUEST_URI']);
        $arPath = explode('/', $arUri['path']);
        if ($arPath[1] === 'bitrix') {
            return;
        }

        $search = [
            '#CITY_FORM_1#',
            '#CITY_FORM_2#',
            '#CITY_FORM_3#',
            '#CITY_FORM_4#',
            '#CITY_FORM_5#',
            '#CITY_FORM_6#',
        ];
        $replace = CityForm::getCityForms();
        $content = str_replace($search, $replace, $content);
    }

    public function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if($arFields["ID"]>0){
            $i = 0;
        } else {
            $j = 0;
        }
    }

    public function OnAfterIBlockElementUpdateHandler(&$arFields)
    {
        if($arFields["RESULT"]){
            $i = 0;
        } else {
            $j = 0;
        }
    }

    public function OnPageStartHandler()
    {
        if (\CSite::InDir('/banks-otkrytie-tarify/')) {
            define('ARTICLE_NEW_DESIGN', true);
            return;
        }

        if (!\CSite::InDir('/article/')) {
            return;
        }

        if ($_SERVER['REQUEST_URI'] === '/article/') {
            return;
        }

        $arUrl = parse_url($_SERVER['REQUEST_URI']);

        $code = str_replace(['/article/', '/'], '', $arUrl['path']);

        $sql = "SELECT * FROM `b_iblock_element_property` as `ep`";
        $sql .= " LEFT JOIN `b_iblock_element` as `e` ON `ep`.`IBLOCK_ELEMENT_ID` = `e`.`ID`";
        $sql .= " LEFT JOIN `b_iblock_property` as `p` ON `ep`.`IBLOCK_PROPERTY_ID` = `p`.`ID`";
        $sql .= " WHERE `e`.`CODE` = '$code'";
        $sql .= " AND `p`.`CODE` = 'NEW_DESIGN'";

        $connection = Application::getConnection();
        $result = $connection->query($sql)->fetch();

        if (!$result) {
            return;
        }

        define('ARTICLE_NEW_DESIGN', true);
    }
}
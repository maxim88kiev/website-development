<?php

namespace AMBase\Podelu;

use \Bitrix\Iblock\ElementTable;

class URL
{
    public static function isIncludeCity()
    {
        $arURI = explode('/', $_SERVER['REQUEST_URI']);

        if ($arURI[1] !== 'rko') {
            return false;
        }


        if (in_array($arURI[2], ['', 'online', 'besplatny', 'registracya'])) {
            return false;
        }

        if (
            in_array($arURI[2], ['ip', 'ooo']) &&
            in_array($arURI[3], ['', 'online', 'besplatny'])
        ) {
            return false;
        }

        return true;
    }

    public static function getCityName()
    {
        $code = static::getCityCode();
        if (!$code) {
            return false;
        }

        $arCity = ElementTable::getList([
            'filter' => ['CODE' => $code,'IBLOCK_ID'=>4],
            'select' => ['NAME']
        ])->Fetch();

        return $arCity['NAME'];
    }

    public static function getCityCode()
    {
        if (!static::isIncludeCity()) {
            return false;
        }

        $arURI = explode('/', $_SERVER['REQUEST_URI']);

        if (in_array($arURI[2], ['ip', 'ooo'])) {
            return $arURI[3];
        }

        return $arURI[2];
    }
}
<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;
use Bitrix\Iblock\ElementTable;

class UpdateArticleDatetimes extends AbstractMigration
{
    public function up()
    {
        Loader::includeModule('iblock');

        $filter = ['IBLOCK_TYPE_ID' => 'SITE', 'CODE' => 'article'];
        $parameters = ['filter' => $filter];
        $arIblock = IblockTable::getList($parameters)->fetch();

        $filter = ['IBLOCK_ID' => $arIblock['ID']];
        $parameters = ['filter' => $filter];
        $arElements = ElementTable::getList($parameters)->fetchAll();
        $el = new CIBlockElement;
        foreach ($arElements as $arElement) {
            $data = ['ACTIVE_FROM' => $arElement['DATE_CREATE']];

            if (!$el->Update($arElement['ID'], $data)) {
                echo "<pre>";
                print_r($el->LAST_ERROR);
                echo "</pre>";
            }
        }
    }

    public function down()
    {

    }
}

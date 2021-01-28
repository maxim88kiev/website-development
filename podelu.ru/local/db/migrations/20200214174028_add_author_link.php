<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Iblock\IblockTable;
use Bitrix\Iblock\PropertyTable;

class AddAuthorLink extends AbstractMigration
{
    public function up()
    {
        $filter = ['IBLOCK_TYPE_ID' => 'SITE', 'CODE' => 'authors'];
        $parameters = ['filter' => $filter];
        $iblocks = IblockTable::getList($parameters)->fetchAll();

        $data = [
            'NAME' => 'Ссылка на автора',
            'ACTIVE' => 'Y',
            'SORT' => 500,
            'CODE' => 'LINK',
            'PROPERTY_TYPE' => PropertyTable::TYPE_STRING,
            'ROW_COUNT' => 1,
            'COL_COUNT' => 30,
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'MULTIPLE_CNT' => 5,
            'LINK_IBLOCK_ID' => 0,
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'IS_REQUVERSIONIRED' => 1,
        ];

        foreach ($iblocks as $iblock) {
            $data['IBLOCK_ID'] = $iblock['ID'];
            PropertyTable::add($data);
        }
    }

    public function down()
    {
        $filter = ['IBLOCK_TYPE_ID' => 'SITE', 'CODE' => 'authors'];
        $parameters = ['filter' => $filter];
        $iblocks = IblockTable::getList($parameters)->fetchAll();

        $iblockIdList = [];
        foreach ($iblocks as $iblock) {
            $iblockIdList[] = $iblock['ID'];
        }

        $filter = ['IBLOCK_ID' => $iblockIdList, 'CODE' => 'LINK'];
        $parameters = ['filter' => $filter];
        $props = PropertyTable::getList($parameters)->fetchAll();

        foreach($props as $prop) {
            PropertyTable::delete($prop['ID']);
        }
    }
}

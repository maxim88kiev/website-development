<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Main\Loader;

class ArticleAddPropNewDesign extends AbstractMigration
{
    public function up()
    {
        Loader::includeModule('iblock');

        $arFields = [
            'IBLOCK_ID' => $this->getIblockId(),
            'NAME' => 'Новый дизайн',
            'ACTIVE' => "Y",
            'CODE' => 'NEW_DESIGN',
            'PROPERTY_TYPE' => 'L',
            'LIST_TYPE' => 'C',
            'SORT' => 500,
            'VALUES' => [
                [
                    'XML_ID' => 'Y',
                    'VALUE' => 'Да',
                    'DEF' => 'N',
                    'SORT' => 100,
                ]
            ]
        ];

        (new CIBlockProperty())->Add($arFields);
    }

    public function down()
    {
        $arFilter = [
            'IBLOCK_ID' => $this->getIblockId(),
            'CODE' => 'NEW_DESIGN',
        ];
        $arProp = CIBlockProperty::GetList([], $arFilter)->Fetch();

        (new CIBlockProperty())->Delete($arProp['ID']);
    }

    private function getIblockId()
    {
        $arIblock = CIBlock::GetList([], ['IBLOCK_TYPE_ID' => 'SITE', 'CODE' => 'article'])->Fetch();

        return $arIblock['ID'];
    }
}

<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Main\Loader;

class ArticleAddPropCountComments extends AbstractMigration
{
    public function up()
    {
        Loader::includeModule('iblock');

        $arFields = [
            'IBLOCK_ID' => $this->getIblockId(),
            'NAME' => 'Количество комментариев',
            'ACTIVE' => "Y",
            'CODE' => 'COUNT_COMMENTS',
            'PROPERTY_TYPE' => 'N',
            'SORT' => 500,
            'DEFAULT_VALUE' => 0,
        ];

        (new CIBlockProperty())->Add($arFields);
    }

    public function down()
    {
        $arFilter = [
            'IBLOCK_ID' => $this->getIblockId(),
            'CODE' => 'COUNT_COMMENTS',
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

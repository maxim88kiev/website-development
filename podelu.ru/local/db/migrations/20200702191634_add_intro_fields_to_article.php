<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Main\Loader;

class AddIntroFieldsToArticle extends AbstractMigration
{
    public function up()
    {
        Loader::includeModule('iblock');

        $iblockId = $this->getIblockId();
        $arFields = [
            'IBLOCK_ID' => $iblockId,
            'NAME' => 'Вступление. Текст.',
            'ACTIVE' => "Y",
            'CODE' => 'INTRO_TEXT',
            'PROPERTY_TYPE' => 'S',
            "USER_TYPE" => "HTML",
            'SORT' => 500,
        ];

        (new CIBlockProperty())->Add($arFields);

        $arFields = [
            'IBLOCK_ID' => $iblockId,
            'NAME' => 'Вступление. Картинка.',
            'ACTIVE' => "Y",
            'CODE' => 'INTRO_IMAGE',
            'PROPERTY_TYPE' => 'F',
            'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg, svg',
            'SORT' => 500,
        ];

        (new CIBlockProperty())->Add($arFields);
    }

    public function down()
    {
        $arFilter = ['IBLOCK_ID' => $this->getIblockId(), 'CODE' => 'INTRO_TEXT'];
        $arProp = CIBlockProperty::GetList([], $arFilter)->Fetch();
        (new CIBlockProperty())->Delete($arProp['ID']);

        $arFilter = ['IBLOCK_ID' => $this->getIblockId(), 'CODE' => 'INTRO_IMAGE'];
        $arProp = CIBlockProperty::GetList([], $arFilter)->Fetch();
        (new CIBlockProperty())->Delete($arProp['ID']);
    }

    private function getIblockId()
    {
        $arIblock = CIBlock::GetList([], ['IBLOCK_TYPE_ID' => 'SITE', 'CODE' => 'article'])->Fetch();

        return $arIblock['ID'];
    }
}

<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;

class AddCommentsIblock extends AbstractMigration
{
    public function up()
    {
        Loader::includeModule('iblock');

        $arFields = [
            'IBLOCK_TYPE_ID' => 'SITE',
            'LID' => 's1',
            'CODE' => 'comments',
            'NAME' => 'Комментарии',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'LIST_PAGE_URL' => '',
            'DETAIL_PAGE_URL' => '',
            'SECTION_PAGE_URL' => '',
            'GROUP_ID' => [2 => 'R'],
        ];
        $ib = new CIBlock();
        $iblockId = $ib->Add($arFields);

        $arFields = [];
        $arFields['LOG_SECTION_ADD']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_SECTION_EDIT']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_SECTION_DELETE']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_ELEMENT_ADD']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_ELEMENT_EDIT']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_ELEMENT_DELETE']['IS_REQUIRED'] = 'Y';
        CIBlock::SetFields($iblockId, $arFields);

        $oUserTypeEntity = new CUserTypeEntity();
        $aUserFields = [
            'ENTITY_ID' => 'IBLOCK_' . $iblockId . '_SECTION',
            'FIELD_NAME' => 'UF_ENTITY_ID',
            'USER_TYPE_ID' => 'integer',
        ];
        $oUserTypeEntity->Add($aUserFields);
    }

    public function down()
    {
        $filter = ['IBLOCK_TYPE_ID' => 'SITE', 'CODE' => 'comments'];
        $parameters = ['filter' => $filter];
        $iblock = IblockTable::getList($parameters)->fetch();
        if (!empty($iblock)) {
            CIBlock::Delete($iblock['ID']);
        }
    }
}

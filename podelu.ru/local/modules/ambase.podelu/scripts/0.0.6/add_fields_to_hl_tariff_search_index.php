<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('highloadblock');

$oUserTypeEntity = new CUserTypeEntity();

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_INDEX_SORT',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_INDEX_SORT',
    'SORT' => 200,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'Индекс сортировки тарифа',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'Индекс сортировки тарифа',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'Индекс сортировки тарифа',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_COUNT_PAY_FROM',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_COUNT_PAY_FROM',
    'SORT' => 300,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'Количество платежей от',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'Количество платежей от',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'Количество платежей от',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);


$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_COUNT_PAY_TO',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_COUNT_PAY_TO',
    'SORT' => 400,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'Количество платежей до',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'Количество платежей до',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'Количество платежей до',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_CASH_OUT_FROM',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_CASH_OUT_FROM',
    'SORT' => 500,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'для снятия наличных(от)',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'для снятия наличных(от)',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'для снятия наличных(от)',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_CASH_OUT_TO',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_CASH_OUT_TO',
    'SORT' => 600,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'для снятия наличных(до)',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'для снятия наличных(до)',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'для снятия наличных(до)',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_TRANSFER_FROM',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_TRANSFER_FROM',
    'SORT' => 700,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'для перевода физ. лицам(от)',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'для перевода физ. лицам(от)',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'для перевода физ. лицам(от)',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_TRANSFER_TO',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_TRANSFER_TO',
    'SORT' => 800,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'для перевода физ. лицам(до)',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'для перевода физ. лицам(до)',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'для перевода физ. лицам(до)',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_TRANSFER_TO',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_TRANSFER_TO',
    'SORT' => 900,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'для перевода физ. лицам(до)',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'для перевода физ. лицам(до)',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'для перевода физ. лицам(до)',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_BANK_ID',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_BANK_ID',
    'SORT' => 1000,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'ИД банка',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'ИД банка',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'ИД банка',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

$aUserFields = array(
    'ENTITY_ID' => 'HLBLOCK_1',
    'FIELD_NAME' => 'UF_TARIFF_INT_ID',
    'USER_TYPE_ID' => 'integer',

    'XML_ID' => 'XML_UF_TARIFF_INT_ID',
    'SORT' => 1100,
    'MULTIPLE' => 'N',
    'MANDATORY' => 'Y',
    'SHOW_FILTER' => 'N',
    'SHOW_IN_LIST' => '',
    'EDIT_IN_LIST' => '',
    'IS_SEARCHABLE' => 'N',

    'SETTINGS' => array(
        'DEFAULT_VALUE' => '',
        'SIZE' => '20',
        'ROWS' => '1',
        'MIN_LENGTH' => '0',
        'MAX_LENGTH' => '0',
        'REGEXP' => '',
    ),
    'EDIT_FORM_LABEL' => array(
        'ru' => 'ИД тарифа',
        'en' => 'User field',
    ),
    'LIST_COLUMN_LABEL' => array(
        'ru' => 'ИД тарифа',
        'en' => 'User field',
    ),
    'LIST_FILTER_LABEL' => array(
        'ru' => 'ИД тарифа',
        'en' => 'User field',
    ),
    'ERROR_MESSAGE' => array(
        'ru' => 'Ошибка при заполнении пользовательского свойства',
        'en' => 'An error in completing the user field',
    ),
    'HELP_MESSAGE' => array(
        'ru' => '',
        'en' => '',
    ),
);

$iUserFieldId = $oUserTypeEntity->Add($aUserFields);

echo 'success';
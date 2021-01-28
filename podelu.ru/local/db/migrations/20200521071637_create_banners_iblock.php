<?php

use Phinx\Migration\AbstractMigration;
use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;

class CreateBannersIblock extends AbstractMigration
{
    const IBLOCK_TYPE_ID = 'SITE';
    const CODE = 'banners';
    const NAME = 'Баннеры';

    const DEFAULT_TITLE_COLOR = '#222222';
    const DEFAULT_TITLE_FONTSIZE = '32px';
    const DEFAULT_SUBTITLE_COLOR = '#222222';
    const DEFAULT_SUBTITLE_FONTSIZE = '18px';
    const DEFAULT_BTN_COLOR = '#FFFFFF';
    const DEFAULT_BTN_BGCOLOR = '#222222';
    const DEFAULT_BTN_FONTSIZE = '20px';

    protected $iblockId = null;
    protected $propsSort = 0;

    public function up()
    {
        Loader::includeModule('iblock');

        $arFields = [
            'IBLOCK_TYPE_ID' => static::IBLOCK_TYPE_ID,
            'LID' => 's1',
            'CODE' => static::CODE,
            'NAME' => static::NAME,
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'LIST_PAGE_URL' => '',
            'DETAIL_PAGE_URL' => '',
            'SECTION_PAGE_URL' => '',
            'GROUP_ID' => [2 => 'R'],
            'ELEMENTS_NAME' => 'Баннеры',
            'ELEMENT_NAME' => 'Баннер',
            'ELEMENT_ADD' => 'Добавить баннер',
            'ELEMENT_EDIT' => 'Изменить баннер',
            'ELEMENT_DELETE' => 'Удалить баннер',
        ];
        $ib = new \CIBlock();
        $this->iblockId = $ib->Add($arFields);

        $arFields = [];
        $arFields['LOG_SECTION_ADD']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_SECTION_EDIT']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_SECTION_DELETE']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_ELEMENT_ADD']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_ELEMENT_EDIT']['IS_REQUIRED'] = 'Y';
        $arFields['LOG_ELEMENT_DELETE']['IS_REQUIRED'] = 'Y';
        CIBlock::SetFields($this->iblockId, $arFields);

        $this->createProperties();

        $this->createBanners();
    }

    public function down()
    {
        Loader::includeModule('iblock');

        $filter = [
            'IBLOCK_TYPE_ID' => static::IBLOCK_TYPE_ID,
            'CODE' => static::CODE
        ];
        $parameters = ['filter' => $filter];
        $iblock = IblockTable::getList($parameters)->fetch();
        if (!empty($iblock)) {
            CIBlock::Delete($iblock['ID']);
        }
    }

    private function createProperties()
    {
        $this->createLinkProp();
        $this->createTitleProps();
        $this->createSubtitleProps();
        $this->createBtnProps();
        $this->createMarkProp();
    }

    private function createProp($name, $code, $type, $defaultValue = null, $required = false)
    {
        $this->propsSort += 10;

        $arFields = [
            'IBLOCK_ID' => $this->iblockId,
            'NAME' => $name,
            'ACTIVE' => "Y",
            'CODE' => $code,
            'PROPERTY_TYPE' => $type,
            'SORT' => $this->propsSort,
        ];

        if ($defaultValue) {
            $arFields['DEFAULT_VALUE'] = $defaultValue;
        }

        if ($required) {
            $arFields['IS_REQUIRED'] = 'Y';
        }

        $ibp = new CIBlockProperty;
        return $ibp->Add($arFields);
    }

    private function createLinkProp()
    {
        return $this->createProp('Ссылка', 'LINK', 'S', '', true);
    }

    private function createTitleProps()
    {
        $this->createTitleColorProp();
        $this->createTitleFontSizeProp();
    }

    private function createTitleColorProp()
    {
        return $this->createProp('Цвет заголовка', 'TITLE_COLOR', 'S', static::DEFAULT_TITLE_COLOR);
    }

    private function createTitleFontSizeProp()
    {
        return $this->createProp('Размер заголовка', 'TITLE_FONTSIZE', 'S', static::DEFAULT_TITLE_FONTSIZE);
    }

    private function createSubtitleProps()
    {
        $this->createSubtitleColorProp();
        $this->createSubtitleFontSizeProp();
    }

    private function createSubtitleColorProp()
    {
        return $this->createProp('Цвет подзаголовка', 'SUBTITLE_COLOR', 'S', static::DEFAULT_SUBTITLE_COLOR);
    }

    private function createSubtitleFontSizeProp()
    {
        return $this->createProp('Размер подзаголовка', 'SUBTITLE_FONTSIZE', 'S', static::DEFAULT_SUBTITLE_FONTSIZE);
    }

    private function createBtnProps()
    {
        $this->createBtnTextProp();
        $this->createBtnColorProp();
        $this->createBtnBgColorProp();
        $this->createBtnFontSizeProp();
        $this->createBtnBorderColorProp();
        $this->createBtnBottomProp();
    }

    private function createBtnTextProp()
    {
        return $this->createProp('Текст на кнопке', 'BTN_TEXT', 'S');
    }

    private function createBtnColorProp()
    {
        return $this->createProp('Цвет текста на кнопке', 'BTN_COLOR', 'S', '#FFFFFF');
    }

    private function createBtnBgColorProp()
    {
        return $this->createProp('Цвет фона кнопки', 'BTN_BGCOLOR', 'S', '#222222');
    }

    private function createBtnFontSizeProp()
    {
        return $this->createProp('Размер текста на кнопке', 'BTN_FONTSIZE', 'S', '20px');
    }

    private function createBtnBorderColorProp()
    {
        return $this->createProp('Цвет границы кнопки', 'BTN_BORDERCOLOR', 'S', '');
    }

    private function createBtnBottomProp()
    {
        $this->propsSort += 10;

        $arFields = [
            'IBLOCK_ID' => $this->iblockId,
            'NAME' => 'Прижать кнопку к низу',
            'ACTIVE' => "Y",
            'CODE' => 'BTN_BOTTOM',
            'PROPERTY_TYPE' => 'L',
            'LIST_TYPE' => 'C',
            'SORT' => $this->propsSort,
            'VALUES' => [
                [
                    'XML_ID' => 'Y',
                    'VALUE' => 'Да',
                    'DEF' => 'N',
                    'SORT' => 100,
                ]
            ]
        ];

        $ibp = new CIBlockProperty;
        return $ibp->Add($arFields);
    }

    private function createMarkProp()
    {
        return $this->createProp('Метка', 'MARK', 'S');
    }

    private function createBanners()
    {
        $this->createBanner1();
        $this->createBanner2();
        $this->createBanner3();
        $this->createBanner4();
        $this->createBanner5();
        $this->createBanner6();
    }

    private function createBanner($data)
    {
        $arFields = [
            'IBLOCK_ID' => $this->iblockId,
            'NAME' => $data->name,
            'PREVIEW_PICTURE' => CFile::MakeFileArray($data->img),
            'PREVIEW_TEXT' => $data->titleText ?? '',
            'PREVIEW_TEXT_TYPE' => 'html',
            'DETAIL_TEXT' => $data->subtitleText ?? '',
            'DETAIL_TEXT_TYPE' => 'html',
            'PROPERTY_VALUES' => [
                'LINK' => $data->link,

                'TITLE_COLOR' => $data->titleColor ?? static::DEFAULT_TITLE_COLOR,
                'TITLE_FONTSIZE' => $data->titleFontSize ?? static::DEFAULT_TITLE_FONTSIZE,

                'SUBTITLE_COLOR' => $data->subtitleColor ?? static::DEFAULT_SUBTITLE_COLOR,
                'SUBTITLE_FONTSIZE' => $data->subtitleFontSize ?? static::DEFAULT_SUBTITLE_FONTSIZE,

                'BTN_TEXT' => $data->btnText ?? '',
                'BTN_COLOR' => $data->btnColor ?? static::DEFAULT_BTN_COLOR,
                'BTN_BGCOLOR' => $data->btnBgColor ?? static::DEFAULT_BTN_BGCOLOR,
                'BTN_FONTSIZE' => $data->btnFontSize ?? static::DEFAULT_BTN_FONTSIZE,
                'BTN_BORDERCOLOR' => $data->btnBorderColor ?? '',
            ],
        ];

        if ($data->btnBottom) {
            $arFilter = ['IBLOCK_ID' => $this->iblockId, 'CODE' => 'BTN_BOTTOM'];
            $arEnum = CIBlockPropertyEnum::GetList([], $arFilter)->Fetch();
            $arFields['PROPERTY_VALUES']['BTN_BOTTOM']['VALUE'] = $arEnum['ID'];
        }


        $el = new CIBlockElement();
        $id = $el->Add($arFields);

        if (!$id) {
            echo $el->LAST_ERROR;
        }
    }

    private function createBanner1()
    {
        $data = new stdClass();
        $data->name = '1';
        $data->link = '/';
        $data->img = __DIR__ . '/create_banners_iblock/1.png';
        $data->btnText = 'Выбрать бухгалтера';
        $data->btnBottom = true;

        $this->createBanner($data);
    }

    private function createBanner2()
    {
        $data = new stdClass();
        $data->name = '2';
        $data->link = '/';
        $data->img = __DIR__ . '/create_banners_iblock/2.png';

        $data->titleText = 'Ищете<br>бухгалтера<br>на аутсорсинг?<br>';
        $data->subtitleText = '<ul><li>Зарегистрируйтесь</li><li>Выберите раздел бухгалтерия</li><li>Создайте заказ</li></ul>';

        $data->btnText = 'Выбрать бухгалтера';
        $data->btnColor = '#222222';
        $data->btnBgColor = '#FFFFFF';
        $data->btnFontSize = '18px';
        $data->btnBorderColor = '#2EC4B6';
        $data->btnBottom = true;

        $this->createBanner($data);
    }

    private function createBanner3()
    {
        $data = new stdClass();
        $data->name = '3';
        $data->link = '/';
        $data->img = __DIR__ . '/create_banners_iblock/3.png';

        $data->titleText = 'Ищете<br>бухгалтера<br>на аутсорсинг?<br>';
        $data->titleFontSize = '28px';

        $data->btnText = 'Выбрать бухгалтера';
        $data->btnColor = '#222222';
        $data->btnBgColor = '#FFFFFF';
        $data->btnFontSize = '18px';
        $data->btnBorderColor = '#2EC4B6';

        $this->createBanner($data);
    }

    private function createBanner4()
    {
        $data = new stdClass();
        $data->name = '4';
        $data->link = '/';
        $data->img = __DIR__ . '/create_banners_iblock/4.png';

        $data->titleText = 'Ищете бухгалтера<br>на аутсорсинг?<br>';
        $data->titleFontSize = '30px';

        $data->btnText = 'Выбрать бухгалтера';
        $data->btnColor = '#FFFFFF';
        $data->btnBgColor = '#2EC4B6';

        $this->createBanner($data);
    }

    private function createBanner5()
    {
        $data = new stdClass();
        $data->name = '5';
        $data->link = '/';
        $data->img = __DIR__ . '/create_banners_iblock/5.png';

        $data->btnText = 'Выбрать бухгалтера';

        $this->createBanner($data);
    }

    private function createBanner6()
    {
        $data = new stdClass();
        $data->name = '6';
        $data->link = '/';
        $data->img = __DIR__ . '/create_banners_iblock/6.png';

        $data->subtitleText = 'Ищете бухгалтера<br>на аутсорсинг?<br>';
        $data->subtitleFontSize = '24px';

        $data->btnText = 'Выбрать бухгалтера';
        $data->btnFontSize = '18px';

        $this->createBanner($data);
    }
}

<?php

namespace AMBase\Podelu\Articles\Banners;

use AMBase\Podelu\App;

class BannerRepository
{
    protected $el;
    protected $iblockId;

    public function __construct()
    {
        $this->el = new \CIBlockElement();
        $this->iblockId = (App::getInstance())->container->get('iblock.banners.id');
    }

    public function findById($id)
    {
        $iblockResult = $this->el->GetById($id);
        $element = $iblockResult->GetNextElement();
        $item = $element->GetFields();

        if ($item['PREVIEW_PICTURE']) {
            $item['PREVIEW_PICTURE'] = \CFile::GetFileArray($item['PREVIEW_PICTURE']);
        }

        if ($item['DETAIL_PICTURE']) {
            $item['DETAIL_PICTURE'] = \CFile::GetFileArray($item['DETAIL_PICTURE']);
        }

        $item['PROPERTIES'] = $element->GetProperties();

        return Banner::makeFromBitrix($item);
    }

    public function all()
    {
        $banks = [];

        $arOrder = [];
        $arFilter = [
            'IBLOCK_ID' => $this->iblockId,
        ];
        $iblockResult = $this->el->GetList($arOrder, $arFilter);

        while ($element = $iblockResult->GetNextElement()) {
            $item = $element->GetFields();

            if ($item['PREVIEW_PICTURE']) {
                $item['PREVIEW_PICTURE'] = \CFile::GetFileArray($item['PREVIEW_PICTURE']);
            }

            if ($item['DETAIL_PICTURE']) {
                $item['DETAIL_PICTURE'] = \CFile::GetFileArray($item['DETAIL_PICTURE']);
            }

            $item['PROPERTIES'] = $element->GetProperties();

            $bank = Banner::makeFromBitrix($item);
            $banks[] = $bank;
        }

        return $banks;
    }
}
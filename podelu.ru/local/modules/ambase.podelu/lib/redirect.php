<?php
namespace AMBase\Podelu;

class Redirect {
    private $arUrl = [];
    private $path = '';
    private $arCurPage = [];

    public function __construct()
    {
        $this->arUrl = parse_url($_SERVER['HTTP_REFERER']);
        $this->path = $this->arUrl['path'];
        $this->arCurPage = explode('/', $this->arUrl['path']);
    }

    public function getUriForNewCity($cityName)
    {
        $location = null;

        $arFilter = ['IBLOCK_ID' => 4, 'NAME' => $cityName];
        $arElement = \CIBlockElement::GetList([], $arFilter)->Fetch();

        if ($this->needRedirectToCity($arElement, $this->arCurPage)) {
            $location =  '/' . $this->arCurPage[1] . '/';

            if (in_array($this->arCurPage[2], ['ip', 'ooo'])) {
                $location .= $this->arCurPage[2] . "/";
            }

            if ($cityName !== 'Москва') {
                $location .= $arElement['CODE'] . '/';
            }
        }

        return $location;
    }

    private function needRedirectToCity($arElement)
    {
        $arCurPage = $this->arCurPage;

        if (empty($arElement)) {
            return false;
        }

        if (!in_array($arCurPage[1], ['calculator', 'rko'])) {
            return false;
        }

        if (
            in_array($arCurPage[1], ['calculator', 'rko']) &&
            in_array($arCurPage[2], ['besplatny', 'online', 'registracya'])
        ) {
            return false;
        }

        return true;
    }
}
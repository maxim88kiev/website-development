<?php

namespace AMBase\Podelu\Repositories;

use AMBase\Podelu\App;
use Bitrix\Iblock\ElementTable;

class CityRepository
{
    private $el;
    private $iblockId;

    public function __construct(ElementTable $el)
    {
        $this->el = $el;
        $this->iblockId = App::getInstance()->container->get('iblock.city.id');
    }

    public function all($params = [])
    {
        $filter = ['IBLOCK_ID' => $this->iblockId];
        $parameters = ['filter' => $filter];

        return $this->el
            ->getList(array_merge($parameters, $params))
            ->fetchAll();
    }
}
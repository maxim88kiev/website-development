<?php

namespace AMBase\Podelu;

use \luckyproject\geo\GeoHelper;

class Calculator
{
    const BANK_POCHTABANK = 1690; // количество отделений разделить на 4
    const BANK_SOVKOMBANK = 1696; // количество отделений разделить на 2
    const BANK_TINKOFF    = 1681; // всегда №6
    const BANK_TOCHKA     = 1682; // всегда №7
    const BANK_MODULBANK  = 1687; // всегда №12
    const BANK_AVANGARD   = 1689; // всегда №14
    const BANK_LOCKOBANK  = 1692; // всегда №17

    private $arReservedBankIndex = [
        Calculator::BANK_TINKOFF => 6,
        Calculator::BANK_TOCHKA => 7,
        Calculator::BANK_MODULBANK => 12,
        Calculator::BANK_AVANGARD => 14,
        Calculator::BANK_LOCKOBANK => 17,
    ];
    private $arReservedBanks = [];
    private $arReservedIndex = [];


    private $cityName;
    private $dataCount = [];
    private $sortIndex = 0;
    private $tariffs = [];
    private $bankIdList = [];

    public function __construct(&$tariffs)
    {
        $this->tariffs = $tariffs;

        $this->arReservedBanks = array_keys($this->arReservedBankIndex);
        $this->arReservedIndex = array_values($this->arReservedBankIndex);

        $this->cityName = GeoHelper::getCurrentCityName();
        $this->loadBankIdList();
        $this->loadDataCount();
    }

    public function sort()
    {
        $dataCount = $this->sortByCount($this->dataCount);
        $dataCount = $this->sortBySort($dataCount);

        return $this->setBankIdToKey($dataCount);
    }

    private function loadBankIdList()
    {
        foreach($this->tariffs as $tariff) {
            $bankId = $tariff['PROPERTIES']['PROPERTY_BANK']['VALUE'];
            $this->bankIdList[] = $bankId;
        }
    }

    private function loadDataCount()
    {
        $dataCount = $GLOBALS['COUNT_BRANCHES_CITIES_CACHED'];

        $arBankIdCountInCity = [];
        foreach($dataCount as $bankId => $data) {
            if (!in_array($bankId, $this->bankIdList)) continue;

            $arBankIdCountInCity[] = [
                'bankId' => $bankId,
                'count' => $data[$this->cityName],
            ];
        }

        return $this->dataCount = $arBankIdCountInCity;
    }

    public function sortBy($array, $key, $direction = 'asc')
    {
        usort($array, function($a, $b) use ($key, $direction) {
            $value1 = $direction === 'asc' ? $a[$key] : $b[$key];
            $value2 = $direction === 'asc' ? $b[$key] : $a[$key];

            if ($value1 == $value2) {
                return 0;
            }

            return ($value1 > $value2) ? 1 : -1;
        });

        return $array;
    }

    private function sortByCount($dataCount)
    {
        foreach ($dataCount as $index => $data) {
            $dataCount[$index]['count'] = $this->getBusinnessCount($data);
        }

        return $this->sortBy($dataCount, 'count', 'desc');
    }

    private function getBusinnessCount($data)
    {
        switch($data['bankId']) {
            case static::BANK_POCHTABANK:
                return $data['count'] / 4;
            case static::BANK_SOVKOMBANK:
                return $data['count'] / 2;
            default:
                return $data['count'];
        }
    }

    private function sortBySort($dataCount)
    {
        foreach ($dataCount as $index => $data) {
            $dataCount[$index]['sort'] = $this->getBusinnessIndex($data);
        }

        return $this->sortBy($dataCount, 'sort', 'asc');
    }

    private function getBusinnessIndex($data)
    {
        $this->sortIndex++;

        if (in_array($data['bankId'], $this->arReservedBanks)) {
            return $this->arReservedBankIndex[$data['bankId']];
        }

        if (in_array($this->sortIndex, $this->arReservedIndex)) {
            return $this->getBusinnessIndex($data);
        }

        return $this->sortIndex;
    }

    private function setBankIdToKey($dataCount)
    {
        $array = [];
        foreach ($dataCount as $data) {
            $array[$data['bankId']] = $data;
        }

        return $array;
    }
}
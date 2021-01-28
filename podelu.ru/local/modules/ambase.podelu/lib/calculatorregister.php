<?php

namespace AMBase\Podelu;

class CalculatorRegister
{
    private $tariffs = [];
    private $sort = [];
    private $banks = [];

    public function __construct($tariffs, $sort)
    {
        $this->tariffs = $tariffs;
        $this->sort = array_flip($sort);

        // нужно сохранить сотировку банков для ajax
        if (!empty($this->sort)) {
            $_SESSION['SORT_BANKS'] = $this->sort;
        } else {
            $this->sort = $_SESSION['SORT_BANKS'];
        }

        $this->loadBanks();
    }

    public function exec()
    {
        $needBankIdList = array_keys($this->banks);

        $tariffs = [];
        foreach($this->tariffs as $index => $tariff) {
            $bankId = $tariff['PROPERTIES']['PROPERTY_BANK']['VALUE'];
            if (!in_array($bankId, $needBankIdList)) continue;

            $tariff['BUSINESS_SORT'] = $this->getBusinessSort($bankId);
            $tariffs[] = $tariff;
        }

        return $this->sortBy($tariffs, 'BUSINESS_SORT');
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

    private function loadBanks()
    {
        $arIblock = \CIBlock::GetList([], ['CODE' => 'BANKS'])->Fetch();
        $arFilter = [
            'IBLOCK_ID' => $arIblock,
            '!=PROPERTY_NEED_GO_TO_FNS' => false,
            '!=PROPERTY_REGISTRATION_COST' => false,
        ];
        $dbResult = \CIBlockElement::GetList([], $arFilter);
        while($arBank = $dbResult->Fetch()) {
            $this->banks[$arBank['ID']] = trim($arBank['NAME']);
        }
    }

    private function getBusinessSort($bankId)
    {
        return $this->sort[$this->banks[$bankId]];
    }
}

<?php

namespace AMBase\Podelu\Factories;

use AMBase\Podelu\Bank;


class BankFactory
{
    private $countBranches;
    private $cityName;

    public function __construct($countBranches, $cityName = 'Москва')
    {
        $this->countBranches = $countBranches;
        $this->cityName = $cityName;
    }

    public function createFromArray($data)
    {
        $bank = new Bank();

        $bank->id = $data['ID'];
        $bank->name = $data['NAME'];
        $bank->setSort($data['SORT']);
        $bank->setCountBranches($this->getCountBranches($data['ID']));
        $bank->isOnline = Bank::isOnline($bank->id);

        return $bank;
    }

    private function getCountBranches($bankId)
    {
        return $this->countBranches[$bankId][$this->cityName];
    }

}
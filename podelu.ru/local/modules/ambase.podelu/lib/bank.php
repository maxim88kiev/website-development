<?php

namespace AMBase\Podelu;

use AMBase\Podelu\Services\BankService;

class Bank
{
    const TINKOFF    = 1681;
    const TOCHKA     = 1682;
    const MODULBANK  = 1687;
    const DELOBANK   = 1694;
    const PROSTOBANK = 1728;
    const AVANGARD   = 1689;
    const LOCKOBANK  = 1692;
    const POCHTABANK = 1690;
    const SOVKOMBANK = 1696;

    public $id;
    public $name;
    public $sort;
    public $countBranches;
    public $isOnline;

    public static function getIdOnlineBanks()
    {
        return [
            static::TINKOFF,
            static::TOCHKA,
            static::MODULBANK,
            static::DELOBANK,
            static::PROSTOBANK,
        ];
    }

    public static function isOnline($id)
    {
        return in_array($id, static::getIdOnlineBanks());
    }

    public function setSort($sort)
    {
        $this->sort = BankService::getSort($this->id, $sort);
        return $this;
    }

    public function setCountBranches($countBranches)
    {
        $this->countBranches = BankService::getCountBranches($this->id, $countBranches);
        return $this;
    }
}

<?php

namespace AMBase\Podelu\Services;

use AMBase\Podelu\Bank;

class BankService
{
    public static function getSort($bankId, $sort)
    {
        switch($bankId) {
            case Bank::TINKOFF:
                return 6;
            case Bank::TOCHKA:
                return 7;
            case Bank::MODULBANK:
                return 12;
            case Bank::AVANGARD:
                return 14;
            case Bank::LOCKOBANK:
                return 17;
        }

        if (in_array($sort, [6, 7, 12, 14, 17])) {
            throw new \Exception('Зарезервированое значение сортировки');
        }

        return $sort;
    }

    public static function getCountBranches($bankId, $countBranches)
    {

        switch($bankId) {
            case Bank::POCHTABANK:
                return $countBranches / 4;
            case Bank::SOVKOMBANK:
                return $countBranches / 2;
        }

        return $countBranches;
    }

    public static function isOnlineBank($bankID)
    {
        return in_array($bankID, [
            Bank::TINKOFF,
            Bank::TOCHKA,
            Bank::MODULBANK,
            Bank::DELOBANK,
            Bank::PROSTOBANK,
        ]);
    }
}

<?php

namespace AMBase\Podelu\Repositories;

use AMBase\Podelu\Bank;
use AMBase\Podelu\Factories\BankFactory;

class BankRepository
{
    private $banks = [];
    private $factory;

    public function __construct(BankFactory $factory)
    {
        $this->factory = $factory;
    }

    public function find()
    {
        $banks = [];

        $arFilter = [];
        $dbResult = \CIBlockElement::GetList([], $arFilter);
        while($arBank = $dbResult->Fetch()) {
            $banks[] = $this->factory->createFromArray($arBank);
        }

        return $banks;
    }

    public function findWithSort()
    {
        $banks = [];

        $arFilter = ['IBLOCK_ID' => 1];
        $dbResult = \CIBlockElement::GetList([], $arFilter);
        while($arBank = $dbResult->Fetch()) {
            $banks[] = $this->factory->createFromArray($arBank);
        }

        usort($banks, [static::class, 'sortByCountBranches']);

        $i = 0;
        foreach ($banks as $bank) {
            $i++;

            $success = true;
            while($success) {
                try {
                    $bank->setSort($i);
                    $success = false;
                } catch (\Exception $exception) {
                    $i++;
                }
            }
        }
        usort($banks, [static::class, 'sortBySort']);

        return $banks;
    }

    private static function sortByCountBranches(Bank $a, Bank $b)
    {
        if ($a->countBranches === $b->countBranches) {
            return 0;
        }

        return $a->countBranches > $b->countBranches ? -1 : 1;
    }

    private static function sortBySort(Bank $a, Bank $b)
    {
        if ($a->sort === $b->sort) {
            return 0;
        }

        return $a->sort > $b->sort ? 1 : -1;
    }
}
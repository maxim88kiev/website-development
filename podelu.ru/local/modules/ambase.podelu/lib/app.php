<?php

namespace AMBase\Podelu;

use Bitrix\Iblock\IblockTable;
use DI\ContainerBuilder;

class App
{
    private static $instance = null;
    private $ibt = null;
    public $container = null;

    public static function getInstance(): App
    {
        if (static::$instance === null) {
            static::$instance = new static(new IblockTable);
        }

        return static::$instance;
    }

    private function __construct(IblockTable $ibt)
    {
        $this->ibt = $ibt;

        $builder = new ContainerBuilder();
        $builder->useAutowiring(false);
        $builder->useAnnotations(false);
        $builder->addDefinitions($_SERVER['DOCUMENT_ROOT'] . '/local/di-config.php');

        $this->container = $builder->build();
        $this->setContainerIblocks();
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    private function setContainerIblocks()
    {
        $arIblocks = $this->ibt->getList()->fetchAll();

        foreach ($arIblocks as $arIblock) {
            if (empty($arIblock['CODE'])) {
                continue;
            }

            $key = 'iblock.' . $arIblock['CODE'] . '.id';
            $this->container->set($key, $arIblock['ID']);

            $key = 'iblock.' . $arIblock['CODE'] . '.type';
            $this->container->set($key, $arIblock['IBLOCK_TYPE_ID']);
        }
    }
}

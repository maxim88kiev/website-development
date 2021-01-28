<?php

use Phinx\Migration\AbstractMigration;
use AMBase\Podelu\App;


class SetSortForMoscowAndSaintPetersburg extends AbstractMigration
{
    public function up()
    {
        $items = [
            ['name' => 'Москва', 'sort' => 1],
            ['name' => 'Санкт-Петербург', 'sort' => 2],
        ];

        $el = new CIBlockElement;
        $arFilter = ['IBLOCK_ID' => App::getInstance()->container->get('iblock.city.id')];
        foreach ($items as $item) {
            $arFilter['NAME'] = $item['name'];
            $arCity = $el->GetList([], $arFilter)->Fetch();

            $el->Update($arCity['ID'], ['SORT' => $item['sort']]);
        }
    }

    public function down()
    {
        $items = [
            ['name' => 'Москва', 'sort' => 500],
            ['name' => 'Санкт-Петербург', 'sort' => 500],
        ];

        $el = new CIBlockElement;
        $arFilter = ['IBLOCK_ID' => App::getInstance()->container->get('iblock.city.id')];
        foreach ($items as $item) {
            $arFilter['NAME'] = $item['name'];
            $arCity = $el->GetList([], $arFilter)->Fetch();

            $el->Update($arCity['ID'], ['SORT' => $item['sort']]);
        }
    }
}

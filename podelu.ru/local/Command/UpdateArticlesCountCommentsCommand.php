<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Bitrix\Main\Loader;
use AMBase\Podelu\App;

class UpdateArticlesCountCommentsCommand extends Command
{
    protected static $defaultName = 'articles:update-count-comments';
    protected $app;

    protected function configure()
    {
        $this->app = App::getInstance();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        Loader::includeModule('iblock');

        $arFilter = [
            'IBLOCK_ID' => $this->app->container->get('iblock.comments.id'),
            'DEPTH_LEVEL' => 1
        ];
        $iBlockResult = \CIBlockSection::GetList([], $arFilter);
        while($arSection = $iBlockResult->Fetch()) {
            $countComments = \CIBlockSection::GetCount([
                '!ID' => $arSection['ID'],
                'IBLOCK_ID' => $arSection['IBLOCK_ID'],
                'LEFT_MARGIN' => $arSection['LEFT_MARGIN'],
                'RIGHT_MARGIN' => $arSection['RIGHT_MARGIN'],
            ]);

            if (!$countComments) {
                continue;
            }

            $arElement = $this->getElementByName($arSection['NAME']);
            $propertyValues = ['COUNT_COMMENTS' => $countComments];
            \CIBlockElement::SetPropertyValuesEx($arElement['ID'], $arElement['IBLOCK_ID'], $propertyValues);
        }

        return 0;
    }

    protected function getElementByName($name)
    {
        $arFilter = [
            'IBLOCK_ID' => $this->app->container->get('iblock.article.id'),
            'NAME' => $name
        ];

        return \CIBlockElement::GetList([], $arFilter)->Fetch();
    }
}
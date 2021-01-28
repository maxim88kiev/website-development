<?php
namespace AMBase\Podelu;

use \Bitrix\Main\EventManager as BxEventMnager;

class EventManager
{
    public static function bindEvents()
    {
        $eventManager = BxEventMnager::getInstance();
        $eventManager->addEventHandler('main', 'OnEndBufferContent', [
            'AMBase\\Podelu\\EventHandler', 'OnEndBufferContent'
        ]);

        $eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', [
            'AMBase\\Podelu\\EventHandler', 'OnAfterIBlockElementAddHandler'
        ]);

        $eventManager->addEventHandler('iblock', 'OnAfterIBlockElementUpdate', [
            'AMBase\\Podelu\\EventHandler', 'OnAfterIBlockElementUpdateHandler'
        ]);

        $eventManager->addEventHandler('main', 'OnPageStart', [
            'AMBase\\Podelu\\EventHandler', 'OnPageStartHandler'
        ]);
    }
}
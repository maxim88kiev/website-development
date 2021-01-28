<?php

if (php_sapi_name() === 'cli') {
    $_SERVER['DOCUMENT_ROOT'] = dirname(__DIR__);
}

include $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

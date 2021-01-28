<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('ambase.podelu');

use AMBase\Podelu\App;
use AMBase\Podelu\Comments\Usecases\CommentAddRequest;
use AMBase\Podelu\Comments\Usecases\CommentAddUsecase;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $app = App::getInstance();
    $commentsIblockId = $app->container->get('iblock.comments.id');

    $params = [
        'elementId' => $_POST['elementId'],
        'parentId' => $_POST['parentId'],
    ];
    $request = new CommentAddRequest($_POST['name'], $_POST['text'], $params);
    $usecase = new CommentAddUsecase($commentsIblockId, $request);
    $response = $usecase->execute();

    die(json_encode($response));
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('ambase.podelu');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commentId = $_POST['comment_id'];
    $ip = "'" . $_SERVER['REMOTE_ADDR'] . "'";
    $userAgent = "'" . $_SERVER['HTTP_USER_AGENT'] . "'";

    $sql = "delete from ambase_podelu_comment_rates where comment_id = $commentId and ip = $ip and user_agent = $userAgent";
    $DB->Query($sql);

    $data = [
        'comment_id' => $commentId,
        'value' => 0,
        'user_id' => 'NULL',
        'ip' => $ip,
        'user_agent' => $userAgent,
    ];

    if ($USER->IsAuthorized()) {
        $data['user_id'] = $USER->GetID();
    }

    $keys = '';
    $values = '';
    foreach ($data as $key => $value) {
        if (!empty($keys)) {
            $keys .= ',';
        }

        if (!empty($values)) {
            $values .= ',';
        }

        $keys .= $key;
        $values .= $value;
    }

    $sql = "insert into ambase_podelu_comment_rates ($keys) values ($values)";
    $result = $DB->Query($sql, true);

    $sql = "select * from ambase_podelu_comment_rates where comment_id = $commentId";
    $dbCommentRates = $DB->Query($sql);
    $likes = 0;
    $dislikes = 0;
    while($arCommentRate = $dbCommentRates->Fetch())
    {
        if ($arCommentRate['value']) {
            $likes += 1;
        } else {
            $dislikes += 1;
        }
    }

    BXClearCache(true, "/s1/ambase/comment.list/");

    $data = [
        'success' => $result !== false,
        'likes' => $likes,
        'dislikes' => $dislikes,
        'isLiked' => false,
        'isDisliked' => true,
    ];

    die(json_encode($data));
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
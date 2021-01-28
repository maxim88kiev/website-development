<?php

$arResult['COMMENTS'] = [];
foreach ($arResult['SECTIONS'] as $arSection) {
    $arResult['COMMENTS'][] = [
        'ID' => $arSection['ID'],
        'EDIT_LINK' => $arSection['EDIT_LINK'],
        'DELETE_LINK' => $arSection['DELETE_LINK'],
        'LVL' => $arSection['DEPTH_LEVEL'] - 1,
        'AVATAR' => mb_strtoupper(mb_substr($arSection['NAME'], 0, 1)),
        'NAME' => $arSection['NAME'],
        'DATE' => FormatDate('x', MakeTimeStamp($arSection['DATE_CREATE'])),
        'TEXT' => $arSection['DESCRIPTION'],
        'LIKES' => $arSection['LIKES'],
        'DISLIKES' => $arSection['DISLIKES'],
        'IS_LIKED' => $arSection['IS_LIKED'],
        'IS_DISLIKED' => $arSection['IS_DISLIKED'],
    ];
}

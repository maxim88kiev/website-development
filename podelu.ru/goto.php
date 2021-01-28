<?php

$CODE = $_GET['CODE'];

$config = include_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/.settings.php';
$dbConfig = $config['connections']['value']['default'];

$mysqli = new mysqli($dbConfig['host'], $dbConfig['login'], $dbConfig['password'], $dbConfig['database']);
if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
}

$sql = "SELECT `e`.`ID` as `id`, `p`.`VALUE` as `link` FROM `b_iblock_element` as `e`";
$sql .= " LEFT JOIN `b_iblock_element_property` AS `p` ON `e`.`ID` = `p`.`IBLOCK_ELEMENT_ID`";
$sql .= " WHERE `e`.`IBLOCK_ID` = 1";
$sql .= " AND `e`.`CODE` = '$CODE'";
$sql .= " AND `p`.`IBLOCK_PROPERTY_ID` = 43";

$bank = $mysqli->query($sql)->fetch_assoc();

if (!$bank) {
    header('Location: /404');
    exit();
}

header('Location: ' . $bank['link'], true, 307);

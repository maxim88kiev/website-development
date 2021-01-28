<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

$connection = Bitrix\Main\Application::getConnection();
$connection->queryExecute("DROP TABLE IF EXISTS ambase_podelu_cities;");

$sql = "CREATE TABLE IF NOT EXISTS ambase_podelu_cities (
            form_1 VARCHAR(255) PRIMARY KEY,
            form_2 VARCHAR(255),
            form_3 VARCHAR(255),
            form_4 VARCHAR(255),
            form_5 VARCHAR(255),
            form_6 VARCHAR(255)
        )";
$connection->queryExecute($sql);

$sql = file_get_contents(__DIR__ . '/ambase_podelu_cities.sql');
$connection->queryExecute($sql);

echo "Table ambase_podelu_cities succusefully created";
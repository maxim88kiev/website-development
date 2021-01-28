<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';


echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!empty($_POST['bankId']) && !empty($_POST['industryId'])) {
    $_SESSION['ACQUIRING']['BANKS'][$_POST['bankId']]['INDUSTRY'] = $_POST['industryId'];
}

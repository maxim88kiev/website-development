<?php

include($_SERVER['DOCUMENT_ROOT'].'components/com_lasercity/helpers/lang_helper.php');
$lang_helper = new LangHelper;

$default_sef = "";
$current_sef = $lang_helper::getCurrentSef();
$language_default = JComponentHelper::getParams('com_languages')->get('site');
$db = JFactory::getDbo();
$db->setQuery("SELECT sef FROM `#__languages` WHERE lang_code = '" . $language_default . "' ");
$result = $db->loadObjectList();
foreach ($result as $row) {
    if (!empty($row->sef)) {
        $default_sef = $row->sef;
        break;
    }
}
$current_sef = str_replace($default_sef, "", $current_sef);
$current_sef = empty($current_sef) ? "/" : "/" . $current_sef . "/";

JFactory::getSession()->set('error_get_code_404', '404');

if (($this->error->getCode()) == '404') {
    //header('Location: '.$current_sef.'404/');
    header( "HTTP/1.1 404 Not Found" );
    //echo file_get_contents('https://'.$_SERVER['SERVER_NAME'].$current_sef.'404/');
    $url = 'https://'.$_SERVER['SERVER_NAME'].$current_sef.'404/';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $html = curl_exec($ch);
    curl_close($ch);

    echo $html;

    exit;
}
?>
<!doctype html>
<html lang="<?= $this->language; ?>" dir="<?= $this->direction; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
    <h1>ERROR</h1>
    <p>
        <?php echo htmlspecialchars($this->_error->getMessage(), ENT_QUOTES, 'UTF-8'); ?>
        <br/><?php echo htmlspecialchars($this->_error->getFile(), ENT_QUOTES, 'UTF-8');?>:<?php echo $this->_error->getLine(); ?>
    </p>
</body>
</html>
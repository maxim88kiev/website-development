<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST["telephon"];
	$message = $_POST['message'];
	$site = $_POST['site'];
	$check = $_POST['check'];
	$service_name = $_POST['service_name'];
	
	$error = '';
	if(!$name  || strlen($name) < 1) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$tel) {$error .= 'Укажите номер телефона. ';}
	if(!$site  || strlen($site) < 1) {$error .= 'Укажите Ваш сайт. ';}
	if(!$check) {$error .= 'Условия обработки данных. ';}
	if(!$error) {
		$address = "lumenis11@ukr.net";
		$sub = "Keis: форма - просчет стоимости.";
		$mes = "Имя: ".$name."\n\nПочта: " .$email."\n\nСообщение: ".$message."\n\nТелефон: ".$tel."\n\nСайт: ".$site."\n\nУслуга: ".$service_name."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
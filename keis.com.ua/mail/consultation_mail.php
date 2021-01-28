<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$tel = $_POST["telephon"];
	$form_name = $_POST['form_name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$error = '';
	if(!$name  || strlen($name) < 1) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите номер телефона. ';}
	if(!$error) {
		$address = "lumenis11@ukr.net";
		$mes = "Имя: ".$name."\n\nТелефон: ".$tel."\n\nE-mail: ".$email."\n\nСообщение: ".$message;
		$send = mail ($address,$form_name,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
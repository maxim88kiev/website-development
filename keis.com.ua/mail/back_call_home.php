<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$tel = $_POST["telephon"];
	$check = $_POST['check'];
	$form_name = $_POST['form_name'];
	
	$error = '';
	if(!$name  || strlen($name) < 1) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите номер телефона. ';}
	if(!$check) {$error .= 'Условия обработки данных. ';}
	if(!$error) {
		$address = "lumenis11@ukr.net";
		$sub = "Keis: форма - обратный звонок главная.";
		if($form_name){
			$sub = $form_name;
		}
		$mes = "Имя: ".$name."\n\nТелефон: ".$tel."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
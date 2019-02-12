<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$subject) {$error .= 'Укажите интересующий Вас курс. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
	if(!$error) {
		$address = "elena.darek@gmail.com";
		$mes = "Ваши ФИО или название организации: ".$name."\n\nE-mail: " .$email."\n\nКурс: ".$subject."\n\nТекст сообщения: ".$message."\n\n";
		$send = mail ($address,$subject,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
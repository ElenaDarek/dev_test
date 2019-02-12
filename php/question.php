<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$error = '';
	if(!$subject) {$error .= 'Задайте нам вопрос. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$error) {
		$address = "elena.darek@gmail.com";
		$mes = "\n\nВопрос: " .$subject. "\n\nE-mail:".$email.'';
		$send = mail ($address,$subject,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'Ваш вопрос отправлен';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
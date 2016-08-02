<?php

$passo = (isset($_GET['p'])) ? $_GET['p'] : "";
session_start();

switch($passo){
	case "spoofing":
		spoofing();
		break;
}

function spoofing(){
	include_once '../libs/securimage/securimage.php';
	$securimage = new Securimage();
	
	if ($securimage->check($_POST['captcha_code']) == false) {
		// captcha incorreto
		echo "O codigo digitado e invalido!";
		exit;
	} 
	
	echo "O codigo digitado e valido, prosseguimos com o envio do formulario";
}
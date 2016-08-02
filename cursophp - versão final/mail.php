<?php

$headers='';
$headers.="MIME-Version: 1.0 \r\n";
$headers.="Content-type: text/html; charset=\"UTF-8\" \r\n";
$headers.= "From: Jaison <atendimento@jaison.com.br>";

$mensagem = "<strong>Olá Jaison Schmidt!</strong><br/>";
$mensagem .= "Preciso de mais informações a respeito do curso de PHP, obrigado!";

// destinatario, titulo, mensagem, header
if(mail("php@jaison.com.br","Titulo do email",$mensagem,$headers)) {
	echo "Email enviado com sucesso!";
} else {
	echo "o enviuo do email falhou!";
}
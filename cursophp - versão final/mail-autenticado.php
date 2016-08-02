<?php

$headers='';
$headers.="MIME-Version: 1.0 \r\n";
$headers.="Content-type: text/html; charset=\"UTF-8\" \r\n";
$headers.= "From: Jaison <atendimento@jaison.com.br>";

$mensagem = "<strong>Olá Jaison Schmidt!</strong><br/>";
$mensagem .= "Preciso de mais informações a respeito do curso de PHP, obrigado!";

include("libs/smtp/SMTPconfig.php");
include("libs/smtp/SMTPclass.php");

// Servidor, Porta, Usuario, Senha, FROM (DE), TO (PARA), titulo, mensagem, headers
$SMTPMail = new SMTPClient(
							$SmtpServer,
							$SmtpPort,
							$SmtpUser,
							$SmtpPass,
							$SmtpUser,
							$SmtpUser,
							"E-mail enviado atraves do site",
							$mensagem,
							$headers
						);
// se enviar o email, mostra sucesso, senão, mostra falha					
if($SMTPMail->SendMail()){
	echo "O Email foi enviado com sucesso!";
} else {
	echo "O email falhou!";
}
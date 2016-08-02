<?php

	$titulo = "Aula 11 - Curso de PHP Básico";
	
	$nome = "Jaison Schmidt";
	$idade = 29;
	$dtNasc = "02/02/1984";
	
	$mensagem = "";
	if($idade < 20) {
		$mensagem = "Jovem";
	} else {
		$mensagem = "Você está ficando idoso!";
	}
	
	// calculando o quadrado de um número
	$retorno = quadrado(4);
	$funcao = "O quadrado de 4 é ".$retorno;
	
	$concatenei = concatenar("Jaison","Schmidt");
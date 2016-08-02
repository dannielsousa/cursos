<?php

abstract class Abstrata {
	// todas as classes que herdarem de Abstrata
	// deverão OBRIGATORIAMENTE declarar um método digaOla()
	abstract function digaOla();
	
	function escreve($palavra){
		echo $palavra."<br/>";
	}
}

class Especifica extends Abstrata {
	function digaOla(){
		echo "Ola!<br/>";
	}
}

class MuitoEspecifica extends Abstrata {
	function digaOla(){
		echo "Muito especificamente Ola!";
	}
}

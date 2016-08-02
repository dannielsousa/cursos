<?php 

class Classe01 {
	function conectar(){
		// por padrão conecta com um banco de dados
		echo "Chamou o metodo da classe 01<br/>";
	}
}

class Classe02 extends Classe01 {
	
}

class Classe03 extends Classe02 {
	function conectar(){
		// conectar com outro banco de dados
		echo "Chamou o metodo da classe 03<br/>";
	}
}

$var1 = new Classe01();
$var2 = new Classe02();
$var3 = new Classe03();

$var1->conectar();
$var2->conectar();
$var3->conectar();
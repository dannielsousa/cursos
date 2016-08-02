<?php 
	require("classes/abstrata.class.php");
	
	$esp = new Especifica();
	$mesp = new MuitoEspecifica();
	
	$esp->escreve("Devmedia!");
	$esp->digaOla();
	$mesp->digaOla();
?>
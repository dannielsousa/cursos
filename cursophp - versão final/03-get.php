<?php
	// vamos receber uma vari�vel via GET e exibir a mesma na tela
	$texto = $_GET['nome'];
?>
<html>
	<head>
		<title>Aula 03 - Curso de PHP</title>
	</head>
	<body>
		Ol� <strong><?=$texto?></strong>, seja bem vindo!
	</body>
</html>
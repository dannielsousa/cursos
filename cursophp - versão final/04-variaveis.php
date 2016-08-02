<html>
	<head>
		<title>Aula 04 - Curso de PHP</title>
	</head>
	<body>
	
		<?php
			// declaração das variáveisvariaveis
			$idade = 29; // esta é uma variável do tipo inteira
			$nome  = "Jaison"; // esta é uma variável do tipo string
			$email = "msn@jaison.com.br";
			$habilitado = true; // esta é uma variável do tipo booleana, aceita true ou false
			$valor = 100.00; // esta é uma variável de ponto flutuante
			$calculo = 1+2+3+4+5;
			$resultado = $calculo / 2;
			
			// constantes
			define("IDADE","30");
			define("URL","http://www.devmedia.com.br")
		?>
		
		<p>Olá, me chamo <?=$nome?>, tenho <?=$idade?> anos.</p>
		
		<p><?=$idade?> + 1 = <?php echo $idade + 1; ?></p>
		
		<p><?php echo $nome."1"; ?></p> = concatenação
		
		<p>1+2+3+4+5 = <?=$calculo?></p>
		
		<p>Resultado: <?=$resultado?></p>
		
		<p>Minha idade é: <?php echo IDADE; ?></p>
		<p>Minha idade é: <?php echo IDADE; ?></p>
		<p>Minha idade é: <?php echo IDADE; ?></p>
		<p>Minha idade é: <?php echo IDADE; ?></p>
		<p>Minha idade é: <?php echo IDADE; ?></p>
		<p>Minha idade é: <?php echo IDADE; ?></p>
	</body>
</html>
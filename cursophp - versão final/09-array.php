<html>
	<head>
		<title>Aula 09 - Curso de PHP</title>
	</head>
	<body>
		
		<?php
		
			// Arrays em PHP iniciam em 0
		
			$nossoArray = array("Valor 1", "Valor 2", "Valor 3");
			$nossoArray[] = "Valor 4";
			print_r($nossoArray);
			
			unset($nossoArray[1]);
			
			echo "<br/>";
			
			$nossoArray[2] = "Troquei o valor do indice 2";
			
			print_r($nossoArray);
			
			$novoArray = array("devmedia" => "www.devmedia.com.br", "google" => "www.google.com.br");
			
			echo "<br/>".$novoArray['devmedia'];
			
			$arrayMultinivel = array();
			$arrayMultinivel[0][1] = "valor 0 - 1";
			$arrayMultinivel[0][2] = "valor 0 - 2";
			
			echo "<br/>";
			print_r($arrayMultinivel);
			
		?>
		
	</body>
</html>
<html>
	<head>
		<title>Aula 10 - Curso de PHP</title>
	</head>
	<body>
		<?php
			$estrutura = array(
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"), 
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo"),
								array("Jaison Schmidt", "29", "02/02/1984", "Passo Fundo")
							);
			
			echo "<table border='1'>";
			echo "<tr><td>Nome</td><td>Idade</td><td>Dt. Nascimento</td><td>Cidade</td></tr>";
			
			foreach($estrutura as $val1){
				//print_r($val1);
				echo "<tr>";
				foreach($val1 as $val2){
					echo "<td>".$val2."</td>";
				}
				echo "</tr>";
			}
			
			echo "</table>";
			
		?>		
	</body>
</html>
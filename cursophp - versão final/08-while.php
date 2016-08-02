<html>
	<head>
		<title>Aula 08 - Curso de PHP</title>
	</head>
	<body>
		<p>Criar um código que liste os 100 primeiros números</p>
		
		<?php
			
			$contador = 1;
			while($contador < 101){
				// código
				echo $contador."<br/>";
				
				
				// $contador = $contador + 1
				$contador++;
				
				if($contador == 20){
					$contador++;
					continue;
				}
				
				echo "....";
				
				if($contador == 50) {
					echo "A variável contador está em ".$contador;
					break;	
				}
				
			}
			
			echo "<hr />";
			
			$contador = 0;
			do {
				echo "Do - While: ".$contador;
				$contador++;
			} while( $contador < 0 );
			
		?>
		
	</body>
</html>
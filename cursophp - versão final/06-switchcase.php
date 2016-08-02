<html>
	<head>
		<title>Aula 06 - Curso de PHP</title>
	</head>
	<body>
		
		<?php
			
			if( isset($_POST['btnOperacao']) ) {
				
				$resultado = "";
				$valor1 = $_POST['valor1'];
				$valor2 = $_POST['valor2'];
				
				switch($_POST['operacao']){
					case "1":
						$resultado = $valor1 + $valor2;
						break;
					case "2":
						$resultado = $valor1 - $valor2;
						break;
					case "3":
						$resultado = $valor1 * $valor2;
						break;
					case "4":
						if($_POST['valor2'] != "0")
							$resultado = $valor1 / $valor2;
						else 
							$resultado = "Não é possível dividir por zero";
						break;
				}
			
			}
			
			if( isset($resultado) && $resultado != "" ){
				echo "<h3>O resultado é: ".$resultado."</h3>";
			}
			
		?>
	
		<form method="post">
			<p>Valor 1: <input type="text" name="valor1" /></p>
			<p>Valor 2: <input type="text" name="valor2" /></p>
			
			<p>Selecione a operacao: 
			
			<select name="operacao">
				<option value="1">Adição</option>
				<option value="2">Subtração</option>
				<option value="3">Multiplicação</option>
				<option value="4">Divisão</option>
			</select>
			
			</p>
			
			<p><input type="submit" value="Executar" name="btnOperacao" /></p>
		</form>
	</body>
</html>
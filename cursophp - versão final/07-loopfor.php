<html>
	<head>
		<title>Aula 07 - Curso de PHP</title>
	</head>
	<body>
		
		<p>Criar um código que liste os 100 primeiros números</p>
		
		<?php
			
			// inicialização; condição; incremento
			
			/*
			for($x=1; $x <= 100; $x++){
				echo $x." ";
			}
			*/
			
		?>
		
		
		<table width="100%" border="1">
			<tr>
				<td><h3>Código</h3></td>
				<td><h3>Nome</h3></td>
				<td><h3>Endereço</h3></td>
			</tr>
			
			<?php
				for($x=1; $x <= 50; $x++){
			?>
			<tr>
				<td><?=$x?></td>
				<td>Jaison Schmidt</td>
				<td>Endereço</td>
			</tr>
			<?php } ?>
		</table>	
			
		</body>
		
	</body>
</html>
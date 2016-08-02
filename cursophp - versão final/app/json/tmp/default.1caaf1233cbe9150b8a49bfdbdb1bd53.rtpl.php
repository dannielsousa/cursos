<?php if(!class_exists('raintpl')){exit;}?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $titulo;?></title>
	</head>
	<body style="background:gray;">
		
		<div style="margin-left:auto; margin-right:auto; width:940px; background: white;">
			<h1>Nome da empresa</h1>
		
			<?php echo $conteudo;?>
			
			<p>Endereço completo da empresa</p>
		</div>
		
	</body>
</html>
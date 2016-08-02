<html>
	<head>
		<title>Cadastro de usuario</title>
	</head>
	<body>
		<form enctype="multipart/form-data" action="servico.php?p=spoofing" method="POST">
			<p>Nome do Usuário:</p>
			<p><input type="text" maxlength="120" name="txtNomeUsuario" /></p>
			
			<p>Idade:</p>
			<p><input type="text" maxlength="120" name="txtIdadeUsuario" /></p>
			
			<br/>
			<img id="captcha" src="../libs/securimage/securimage_show.php" alt="CAPTCHA Image" />
			<br/>
			<input type="text" name="captcha_code" size="10" maxlength="6" />
			<a href="#" onclick="document.getElementById('captcha').src = '../libs/securimage/securimage_show.php?' + Math.random(); return false">[ Recarregar ]</a>
			<br/>
			<input type="submit" value="Enviar arquivo"/>
		</form>		
	</body>
</html>
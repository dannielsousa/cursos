<?php
	// vamos verificar se a variavel btnLogar que veio por POST possui o valor Logar
	$logado = "";
	$mensagem = "";
	
	if( isset($_POST['btnLogar']) ){
		// se sim, executa este código
		
		// se o usuário e senha informados forem iguais a 123 e 456 respectivamente, logamos o usuário
		if( $_POST['usuario'] == "123" && $_POST['senha'] == '456') {
			// vou logar o usuário
			$logado = $_POST['usuario'];
		} else {
			$mensagem = "Usuário e/ou senha incorretos ou inexistentes";
		}
		
	}
?>
<html>
	<head>
		<title>Aula 05 - Curso de PHP</title>
	</head>
	<body>
		
		<?php
			if( $logado != "" ) {
				echo "Seja bem vindo ".$logado;
			} else if($mensagem != "") {
				echo $mensagem;
			}			
		?>
	
		<form method="post">
			<p>Informe o usuário: <input type="text" name="usuario" /></p>
			<p>Informe a senha: <input type="password" name="senha" /></p>
			<p><input type="submit" value="Logar" name="btnLogar" /></p>
		</form>
	</body>
</html>
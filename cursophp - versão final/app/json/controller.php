<?php
	$con = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	if( mysqli_connect_errno($con) ){
		echo "A conexão falhou, erro reportado: ".mysqli_connect_error();
		exit();
	}
	
	//require("mdl_usuario.php");
	
	$passo = (isset($_GET['p'])) ? $_GET['p'] : null;
	$tpl = new raintpl();
	
	switch($passo){
		case 'jsonEncode' :
			jsonEncode($con, $tpl);
			break;
		case 'decodeIntermediario':
			jsonDecodeIntermediario($con, $tpl);
			break;
		default:
			jsonDecodeBasico($con, $tpl);
			break;
	}
	
	function jsonEncode($con, $tpl){
		$usuarios = array( "usuarios" => array(
						array("nome" => "Jaison", "idade" => 29, "dataNascimento" => "01/01/2014"),
						array("nome" => "Jaison", "idade" => 29, "dataNascimento" => "01/01/2014"),
						array("nome" => "Jaison", "idade" => 29, "dataNascimento" => "01/01/2014")
					));
		$json = json_encode($usuarios);
		
		echo $json;
	}
	
	function jsonDecodeBasico($con, $tpl){		
		$json = '{ "nomeDoCampo" : "Curso de PHP básico, Json!", "nomeDoCampo2" : "valor" }';
		$obj = json_decode($json);
		
		switch(json_last_error()){
			// JSON_ERROR_DEPTH JSON_ERROR_NONE JSON_ERROR_STATE_MISMATCH 
			case JSON_ERROR_STATE_MISMATCH :
				echo "JSON Invalido ou mal formado";
				break;
			case JSON_ERROR_SYNTAX : 
				echo "problema com a string json";
				break;
			
			case JSON_ERROR_NONE :
				if(property_exists($obj, "nomeDoCampo2"))
					echo "Valor: ".$obj->nomeDoCampo2;
					
				break;
			default :
				echo "Erro de JSON desconhecido";
				break;
		}
		
		
	}
	
	function jsonDecodeIntermediario($con, $tpl){
		$json = '
		
				{
				
					"usuarios" : 
					[
						{ "nome" : "Jaison Schmidt", "idade" : 29, "dataNascimento" : "02/02/1984" },
						{ "nome" : "Jaison Schmidt", "idade" : 29, "dataNascimento" : "02/02/1984" },
						{ "nome" : "Jaison Schmidt", "idade" : 29, "dataNascimento" : "02/02/1984" },
						{ "nome" : "Jaison Schmidt", "idade" : 29, "dataNascimento" : "02/02/1984" }
					]
				
				}
		
		';
		
		$obj = json_decode($json);
		
		foreach($obj->usuarios as $usuario){
			echo "<p>Nome: ".$usuario->nome." Idade: ".$usuario->idade." Data de nascimento: ".$usuario->dataNascimento."</p>";
		}
	}
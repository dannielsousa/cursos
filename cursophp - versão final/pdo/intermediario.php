<?php 
	require("../dbCon.php");
	
	try {
		$pdo = new PDO('mysql:host='.$db_host.';port=3306;dbname='.$db_name,$db_user,$db_pass);
		
		$usuario = "Usuario inserido via PDO";
		$idade = 30;
		$senha = sha1('123456');
		
		// realizando a inserção de dados via PDO
		$ins = $pdo->prepare("INSERT INTO usuario(nome, idade, senha) VALUES(:nome,:idade,:senha)");
		$ins->bindParam(":nome",$usuario);
		$ins->bindParam(":idade",$idade);
		$ins->bindParam(":senha",$senha);
		
		$ins->execute();
		$ins = null;
		
		// listando os dados via PDO
		// preparamos uma instrução SQL
		$obj = $pdo->prepare("SELECT id, nome, idade FROM usuario");
		// executa a instrução SQL
		if($obj->execute()){
			// se retornar mais de um dado, exibe
			if($obj->rowCount() > 0){
				// faz a iteração com o retorno da consulta
				while($row = $obj->fetch(PDO::FETCH_OBJ)){
					echo $row->id." ".$row->nome." ".$row->idade."<br/>";
				}
			}
		}
		$obj = null;
	} catch(PDOException $e){
		echo $e->getMessage();
	}
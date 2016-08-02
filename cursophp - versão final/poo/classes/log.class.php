<?php 

trait Log {
	function log($mensagem) {
		// o usuário tal excluiu o registro tal - horário
				
		echo $mensagem." - ".date("d/m/Y H:i:s")."<br/>";
		// criar um arquivo de log
		// armazenar a mensagem no arquivo de log
	}
}
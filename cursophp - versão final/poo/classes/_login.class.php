<?php 

class Login {
	use Log;
	
	function logar($usuario){
		$this->log("O usuario ".$usuario." efetuou login");
	}
}
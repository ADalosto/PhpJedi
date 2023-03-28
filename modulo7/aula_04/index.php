<?php
//serve apenas para ser herdada e nao pode ser instanciada
	abstract class Teste{
		public function func1(){
			echo 'chamando funcao 1';
		}
		//funcao obrigatoria que uma class que herdar tem que sobrescrever esta funcao abstrata
		abstract function func2();
	}

	class Principal2{
		public static function outroMetodoEstatico(){
			echo 'meu outroMetodoEstatico';
		}
	}
	class Principal extends teste{
		public function func2(){
			echo 'estou declarando oficialmente um metodo abstrado';
		}

		public static function metodoestatico(){
			echo 'metodo estatico';
		}

		public function funcao(){
			//Principal::metodoestatico();
			//self::metodoestatico();
			Principal2::outroMetodoEstatico();
		}
	}
	$principal = new Principal;
	$principal->funcao();
	//Principal::metodoestatico();
	//$principal->func1();
	//$principal->func2();


?> 
<?php
//Final class não é possível outras classes herdarem
//final class Filha
class Filha{
	/*protected function funcaoTeste(){
		echo 'chamando funcao teste';
	}*/
	private function funcaoTeste2(){
		echo 'chamando funcao teste2';
	}
	public function printHello(){
		//$this->funcaoTeste2();
		//echo '<br />'
		echo 'Ola mundo';
	}

}
class Pai extends Filha{

	public function printHello(){
		parent::printHello();
		echo 'nova funcao';
	}

	public function printBye(){
		echo 'Tchau mundo';
		echo '<br />';
		$this->funcaoTeste2();
	}
}
	/*$pai = new Pai;
	$pai->printBye();*/
	$pai = new Pai;
	$pai->printHello();
	//echo '<br />';
	//$pai->printBye();
?>
<?php
//classe exemplo
/**
 * 
 */
// Public funciona em qualquer lugar!
// Private só funciona dentro da classe!
class exemplo
{
	public $var2;
	private $var;
	public static $var3 = 'statico';
/*
public function metodo()
{

}
public static function metodoestatico(){
echo 'metodo estatico';
}

private function metodo2(){

}*/
public function setVar1($var1){
	$this->var1 = $var1;
}
public function pegaVar(){
	return $this->var1;
}
}
?>
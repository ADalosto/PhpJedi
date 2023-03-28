<?php
/*
function mostrarNome($nome,$idade){

	echo '<h2>nome é: </h2>'.$nome;
	echo '<hr>';
	echo "idade é $idade";
}
mostrarNome('Andrey',17);
*/


function calculadora($numero1=10,$numero2=80){
	echo $numero1+$numero2;
}
//calculadora(50,20);
function verdade(){
	return true;
}

function retornaString(){
	return 'Andrey';
}

echo retornaString();

$variavel1=verdade();
?>
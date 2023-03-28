<?php 

//$conteudo = 'Andrey';

//serve para recortar uma string.
	//echo substr($conteudo,0,3);
	//echo '<hr>';


$nome = 'Andrey Enrico Dalosto';
//Serve para separar uma string por espaço transformando em array
$nomes=explode(' ',$nome);
//Print_R serve para ver um array
	//print_r($nomes);


//Serve para juntar um array com um delimitador.
//No caso  o espaço. 
$nomes = implode (' ', $nomes);
	//echo $nomes;


//Strip_tags serve para retirar todo código HTML.
$conteudo = '<h1>Andrey</h1>Outra coisa';
	//echo strip_tags($conteudo);

//htmlentities que mostra o código html da pagina.
	echo htmlentities('<div></div>')

?>
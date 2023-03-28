<?php 
//junta arrays
/*
$array1 = array("chave1"=>"valor1","chave2"=>"valor2");
$array2 = array("chave3"=>"valor3","chave4"=>"valor4");
$array3 = array("chave4");
$resultado = array_merge($array1,$array3,$array2);
print_r($resultado);
*/

//array intersect key serve para retornar valores com a mesma chave em 1 ou mais arrays

/*
$array1 = array("chave1"=>"valor1","chave2"=>"valor2");
$array2 = array("chave1"=>"outro valor","chave2"=>"outro valor");
print_r(array_intersect_key($array1,$array2));
*/
//array map serve para aplicar uma funcao em todos os valores do array
$arr = ['<h1>Andrey</h1>','Kaue','<p>valerio</p>'];

print_r(array_map('strip_tags', $arr));

?>
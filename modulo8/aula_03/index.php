<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');
$id = 7;
//OR funciona como 'ou'
//and funciona como 'e'
$sql = $pdo->prepare("UPDATE `clientes` SET nome='Matheus',sobrenome='Sinatora' WHERE id=$id");

if ($sql->execute()) {
	echo 'meu cliente foi atualizado';

}


?>
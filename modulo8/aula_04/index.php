<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');
$id = 8;
	
$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

if ($sql->execute(array($id))) {
	echo 'meu cliente foi deletado';

}


?>
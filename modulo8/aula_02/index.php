<?php
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');

	if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$momento_registro = date('Y-m-d H-i-s');
	$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
	$sql->execute(array($nome,$sobrenome,$momento_registro));
	echo 'cliente inserido com sucesso!';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Clientes</title>
</head>
<body>
	<form method="post">
	<input type="text" name="nome" required placeholder="Nome" />
	<input type="text" name="sobrenome" required placeholder="Sobrenome" />
	<input type="submit" name="acao" value="enviar!" />
</form>
</body>
</html>

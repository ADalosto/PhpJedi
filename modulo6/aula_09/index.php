<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
<?php
	/*if(isset($_POST['acao'])){
	 $nome = $_POST['nome'];
	 $email = $_POST['email'];
	 echo $nome;
	 echo '<br>';
	 echo $email;
}*/
/*Calculadora
if(isset($_POST['acao'])){
	echo $_POST['numero1']+ $_POST['numero2'];
	}
*/
if(isset($_POST['acao'])){
foreach ($_POST['valor'] as $key => $value) {
	echo $key;
	echo '=>';
	echo $value;

	echo '<hr>';
}
}


?>
<form method="post">
	<!--input type="text" name="nome" />
	<input type="text" name="email" />
	<input type="text" name="numero1" />
	<input type="text" name="numero2" /-->
	<select name="nome">
		<option value="andrey">andrey</option>
		<option value="joao">joao</option>
	</select>
	<input type="checkbox" name="valor[]" value="10">10
	<input type="checkbox" name="valor[]" value="20">20
	<input type="checkbox" name="valor[]" value="30">30
	<input type="checkbox" name="valor[]" value="40">40
	<input type="checkbox" name="valor[]" value="50">50
	<input type="checkbox" name="valor[]" value="60">60
	<input type="submit" name="acao" value="Enviar" />
</form>
</body>
</html>
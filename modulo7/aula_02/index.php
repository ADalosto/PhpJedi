<?php
include 'exemplo.class.php';
//Instancia de objeto!
$exemplo = new Exemplo();
$exemplo->setVar1('Andrey');
echo $exemplo->pegaVar();
//$exemplo->var= 'Olá';erro pois é um private.
//$exemplo->var2 = 'Andrey';
echo '<hr />';
$exemplo2 = new Exemplo;
$exemplo2->setVar1('Matheus');
echo $exemplo2->pegaVar();
//$exemplo2->var2 = 'Matheus';

//echo $exemplo->var2;
//echo '<br />';
//echo $exemplo2->var2;
//echo '<br />';
//Exemplo::$var3 ='Outravariavel';
//echo Exemplo::$var3;
//echo '<br />';
//echo Exemplo::metodoestatico();
?>
<?php
 $arr = array('Andrey','Matheus','Ryan','Caique');


/*
 foreach ($arr as $key => $value) {
 	echo $key;
 	echo '=>';
 	echo $value;
 	echo '<br />';
 }*/
 

 $total = count($arr);
 for($i = 0; $i < $total; $i++){
 	echo $arr[$i];
 	echo '<hr />';
 }
  
?>
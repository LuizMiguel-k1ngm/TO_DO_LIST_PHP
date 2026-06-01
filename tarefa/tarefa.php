<?php
 @session_start();

 $tarefa = $_POST['nova_tarefa'];

 if(!empty($tarefa)){
 echo $tarefa;

 }else{

$var1 = "roxo";
$a = array('amarelo', 'vermelho', 'azul');
array_push($a, $var1);
// print_r($a);
var_dump($a);

}





?>

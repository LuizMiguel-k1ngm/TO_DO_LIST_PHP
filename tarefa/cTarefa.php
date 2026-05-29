<?php
include_once '../config/conn.php';

$tarefa = $_POST['tarefa'] ?? null;


if(!empty($tarefa)){

$sqli = "INSERT INTO tarefa.tarefa (id, tarefa) values(null, '$tarefa')";



$con->query($sqli);

}
else{
    echo "DEU RUIM!";
}

mysqli_close($con);




?>
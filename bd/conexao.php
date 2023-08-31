<?php

$usuario = 'root';
$senha = '';
$database = 'cont_base';
$host = 'localhost:3306';
//$porta = 3306;

$conn = $mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    
 echo "Error";
}else{
 // echo "Conexão Efetuada com Sucesso";
}

?>
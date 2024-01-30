<?php

$hostname = 'localhost';
$database = 'faicc';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

/* check connection */
if ($mysqli->connect_errno) {
    echo "A conexão com o banco de dados falhou: " . $mysqli->connect_error;
    exit();
}else{
    echo "A conexão com o banco de dados foi feita com sucesso";
}


?>
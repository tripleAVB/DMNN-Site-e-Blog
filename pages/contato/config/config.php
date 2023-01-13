<?php

$server = "localhost:3306";
$username = "root";
$password = "";
$dbname = "dmnn01_test";

$conexao = mysqli_connect($server, $username, $password, $dbname);

if(!$conexao){
    die("Falha de conexão: " . mysqli_connect_errno());
}

?>
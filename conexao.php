<?php 
$hostname = "localhost";
$user = "root";
$password = "";
$database = "correiodobem3";


// Criar conexao
$conexao = new mysqli($hostname, $user, $password, $database) or die (mysql_error());

// Checar conexao
if ($conexao->connect_error) {
    die("Conexão falhou !!!" . $conexao->connect_error);
}

?>
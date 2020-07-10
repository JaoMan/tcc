<?php 
session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome' ,FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email' ,FILTER_SANITIZE_EMAIL);

$matricula = filter_input(INPUT_POST, 'matricula' ,FILTER_SANITIZE_STRING);

$senha = filter_input(INPUT_POST, 'senha' ,FILTER_SANITIZE_STRING);




	$sql = "INSERT INTO usuario (matricula, nome, email, senha)
	VALUES ('$matricula', '$nome', '$email', md5('$senha')) ";

	if ($conexao->query($sql) === TRUE) {
	    header("Location: index.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conexao->error;
	}

	$conexao->close();




?>




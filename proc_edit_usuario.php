<?php
session_start();
include_once("conexao.php");

$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


if (!empty('$nome') == TRUE AND  !empty('$email')) {

$query = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE id='$id';	";
$resultado_usuario = mysqli_query($conexao, $query);

if(mysqli_affected_rows($conexao)){
	unset($_SESSION['email']);
	$_SESSION['email'] = $email;
	$_SESSION['msgSucesso'] ='';
	header("Location: painel.php");
}else{
	$_SESSION['msgErro'] = '';
	header("Location: telaPerfil.php");
}

}


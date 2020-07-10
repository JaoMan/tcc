<?php
session_start();
include_once("conexao.php");

$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if (!empty('$nome') == TRUE AND  !empty('$email') AND empty('senha'))  {
	
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

if (!empty('$nome') == TRUE AND  !empty('$email') AND !empty('senha')){

$query = "UPDATE usuario SET nome = '$nome', email = '$email', senha = md5('$senha') WHERE id='$id';	";
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


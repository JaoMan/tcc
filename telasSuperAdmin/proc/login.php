<?php 
session_start();
include_once("conexao.php");

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../index.php');
	exit(); }

$email = filter_input(INPUT_POST, 'email' ,FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha' ,FILTER_SANITIZE_STRING);

$query = "SELECT * FROM superadmin WHERE email = '$email' AND senha = md5('$senha'); ";
 
	$result = mysqli_query($conexao, $query);
 
	$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['email'] = $email;
	header("Location: ../painel.php");
	exit();

}else {
	$_SESSION['nao_autenticadoSUPER'] = '';
	header("Location: ../index.php");
	exit();
}


?>
<?php
session_start();
include_once("conexao.php");

$id = $_SESSION['id_admin'];
$nome =  filter_input(INPUT_POST, 'nome' ,FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email' ,FILTER_SANITIZE_EMAIL);
$matricula = filter_input(INPUT_POST, 'matricula' ,FILTER_SANITIZE_STRING);




$result_usuario = "UPDATE administrador SET nome = '$nome', email = '$email' , matricula = '$matricula' WHERE id='$id'	";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msgSucessoEditarADMIN'] ='';
	header("Location: ../painel.php");
	

}else{
	$_SESSION['msgErroEditarADMIN'] = '';
	header("Location: ../editarADM.php");
}

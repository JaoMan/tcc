<?php
session_start();
include_once("../../conexao.php");
include_once("../../verifica_login.php");


if (isset($_POST['$senhaAtual']) AND  isset($_POST['$senhaNova']) AND isset($_POST['$senhaConfirm'])) {
	header('Location: ../../logout.php');
}


$senhaAtual   = filter_input(INPUT_POST, 'senhaAtual' ,FILTER_SANITIZE_STRING);
$senhaNova 	  = filter_input(INPUT_POST, 'senhaNova' ,FILTER_SANITIZE_STRING);
$senhaConfirm = filter_input(INPUT_POST, 'senhaConfirm' ,FILTER_SANITIZE_STRING);
$email   	  = $_SESSION['usuario_login_email'];


	$query  = "SELECT senha FROM usuario WHERE email = '$email' ";

	$result = mysqli_query($conexao, $query);

	while ($row_usuario = mysqli_fetch_assoc($result)) {
				$senha_banco = $row_usuario['senha']; /* senha com md5*/	
			}


if ($senha_banco == md5($senhaAtual)) 
{
			
			/* SENHA OK*/ 

			if ($senhaNova == $senhaConfirm)
			{
					/* CONFIRMAÇÃO OK*/

					$sql = "UPDATE usuario SET senha = md5('$senhaConfirm') WHERE email = '$email' ";
					$result = mysqli_query($conexao, $sql);

					if ($result) 
					 {
						$_SESSION['SucessoAlterarSenhaUsuario'] = TRUE;
						header('Location: ../../telaPerfil.php');
					 }						 
					else
					  {
					  	$_SESSION['ErroAlterarSenhaUsuarioInesperado'] = TRUE;
						header('Location: ../../telaPerfil.php');
					  }
					

			
			}		  
			else
			{
				/* CONFIRMAÇÃO ERRADA */
				$_SESSION['ErroConfirmarSenhaUsuario'] = TRUE;
				header('Location: ../telaModifySenha.php');
				
			}

}
else
  {

  	/* SENHA ERRADA*/ 

  	$_SESSION['ErroAlterarSenhaAtualUsuario'] = TRUE;
	header('Location: ../telaModifySenha.php');

  }




?>
<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id))
 
 {
	
			$result_usuario = "DELETE FROM usuario WHERE id='$id' ";       /* Apagar  USUÁRIO*/
			$resultado_usuario = mysqli_query($conexao, $result_usuario);
			
				if(mysqli_affected_rows($conexao))	{
				$_SESSION['msgSucessoApagarUsuario'] = true;
				header("Location: ../painel.php");
				
				} else {
						$_SESSION['msgErroApagarUsuario'] = true;
						header("Location: ../painel.php");
					  }
 
 } 
 ?>
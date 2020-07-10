<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id))   

 {

				$result_admin = "DELETE FROM administrador WHERE id='$id'";       /* Apagar ADMINISTRADOR*/
				$resultado_admin = mysqli_query($conexao, $result_admin);
			
				if(mysqli_affected_rows($conexao))	{
				$_SESSION['msgSucessoApagarAdmin'] = true;
				header("Location: ../painel.php");
													}
					else {
						$_SESSION['msgErroApagarAdmin'] = true;
						header("Location: ../painel.php");
						}
 } 

 else{
 	
 }

 ?>
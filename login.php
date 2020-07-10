<?php 
session_start();
include_once("conexao.php");

//Validar se os campos então preenchidos

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();

}else{
			$email = filter_input(INPUT_POST, 'email' ,FILTER_SANITIZE_EMAIL);

			$senha = filter_input(INPUT_POST, 'senha' ,FILTER_SANITIZE_STRING);


			$query = "SELECT * FROM usuario WHERE email = '$email' AND senha = md5('$senha'); ";
		 
			$result = mysqli_query($conexao, $query);
		 
			$row = mysqli_num_rows($result);

			if($row == 1) {
				$_SESSION['usuario_login_email'] = $email;
				header('Location: painel.php');
				exit();

			  }else{
					$query = "SELECT * FROM administrador WHERE email = '$email' AND senha = md5('$senha'); ";
				 
					$result = mysqli_query($conexao, $query);
				 
					$rowAdmin = mysqli_num_rows($result);

					if($rowAdmin == 1) {
					$_SESSION['admin_login_email'] = $email;
					header('Location: telasAdmin/painel.php');
					exit();

					   }else{

					   		$query = "SELECT * FROM superadmin WHERE email = '$email' AND senha = md5('$senha'); ";
				 
							$result = mysqli_query($conexao, $query);
				 
							$rowSuper = mysqli_num_rows($result);


								if($rowSuper == 1) {
									$_SESSION['email'] = $email;
									header('Location: telasSuperAdmin/painel.php');
									exit();


								}else {

									 $_SESSION['nao_autenticado'] = true;
									 header('Location: index.php');
									 exit();
									
									}	
	
						}

						}	
				}








?>

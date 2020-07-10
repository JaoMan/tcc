<?php 
session_start();
include("proc/conexao.php");
include ("proc/verifica_login.php");

	$email = $_SESSION['email'];

			$query = "SELECT * FROM superadmin WHERE email = '$email' ";
			 
			$result = mysqli_query($conexao, $query);
			 
			while ($row_usuario = mysqli_fetch_assoc($result)) {
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				
			}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Painel</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- FONT-AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
 <!-- EDITOR CSS-->
<link rel="stylesheet" type="text/css" href="css/stylesheets.css">

</head>
<body>

<div class="nav navbar bg-dark" >
		<div class="dropdown">
		
			<h1 id= "titulo" class="dropdown-toggle"  data-toggle="dropdown" >
				super :  
						
								<!-- MOSTRAR NOME NO CABEÇALHO -->
					<?php 
					$primeiroNome = explode(" ", $_SESSION['nome']);
						if (isset($primeiroNome[1])) {
							echo " $primeiroNome[0]  $primeiroNome[1]"; 
						}else{
							echo " $primeiroNome[0]"; 
						}
					?> </h1> 
			  
			  <div class="dropdown-menu">
			    <a class="dropdown-item" href="telaPerfil.php">Perfil</a>
				  	<div class="dropdown-divider"></div>
	      			<a class="dropdown-item" href="proc/logout.php">Sair</a>
	   		  </div>
		</div>
 	  <a href="registro.php" class="btn btn-warning" role="button">Adicionar adm</a>
</div>







<div class="container">
	<br> <br>
 <div class="row">
		
	<div class="col-12 test">
		<h1>Tabela Administradores</h1>	

			<div class="col-4">
			<?php
			include("../avisos.php");
			?>
			</div>

	<div class="table-responsive">
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Matricula</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Email</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>

	<?php 	
				/* ------ TABELAS ADMINISTRADORES --------*/
			$query = "SELECT * FROM administrador ORDER BY nome asc" ;
			 
			$result = mysqli_query($conexao, $query);
			 
			while ($row_admin = mysqli_fetch_assoc($result)) {	
			
			?>



		  <tbody>
		    <tr>
		      <td><?php echo $row_admin['matricula']; ?> </td>
		      <td><?php echo $row_admin['nome'];      ?> </td>
		      <td><?php echo $row_admin['email'];     ?> </td>
		      <td><?php echo "<a class='btnExcluir' type='button' href='proc/apagar_adm.php?id=".$row_admin['id']."' data-confirm'Tem certeza que quer excluir esse administrador?' >Excluir</a>";	  ?> </td>
		      <td><?php echo "<a class='btnEditar' type='button' href='editarADM.php?id=".$row_admin['id']."'> Editar</a>";    }  ?> </td>
		    </tr>
		  </tbody>
		</table>
	</div>
					 
									
		 </div>		
	</div>
</div>

<style type="text/css">

.btnExcluir{
	padding: 8px 14px;
	background-color: red;
	color:white;
}

.btnEditar{
	padding: 8px 14px;
	background-color: #4CAF50;
	color:white;
}

</style>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script src="js/personalizado.js"></script>
</body>
</html>
<?php 
session_start();
include("conexao.php");
include ("verifica_login.php");

	$email = $_SESSION['usuario_login_email'];

			$query = "SELECT * FROM usuario WHERE email = '$email' ";
			 
			$result = mysqli_query($conexao, $query);
			 
			while ($row_usuario = mysqli_fetch_assoc($result)) {
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['matricula'] = $row_usuario['matricula'];
				$_SESSION['senha'] = $row_usuario['senha'];	
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
						
								<!-- MOSTRAR NOME NO CABEÇALHO -->
					<?php 
					$primeiroNome = explode(" ", $_SESSION['nome']);
						if (isset($primeiroNome[1])) {
							echo "$primeiroNome[0] $primeiroNome[1]"; 
						}else{
							echo "$primeiroNome[0]"; 
						}
					 
					
					
					?></h1> 
			  
			  <div class="dropdown-menu">
			    <a class="dropdown-item" href="telaPerfil.php">Meus dados</a>
				  	<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Curiosidades</a> 
				  	<div class="dropdown-divider"></div>
	      		<a class="dropdown-item" href="logout.php">Sair</a>
	   		  </div>
		</div>
</div>

<?php 
   /*Mensagem de Sucesso ao alterar dados*/

   if (isset($_SESSION['msgSucesso'])) {
?>
  <div class="alert alert-success" role="alert"> Perfil atualizado com sucesso!
    <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php 
  unset($_SESSION['msgSucesso']);
}

  ?>


<div class="container-fluid ">
	<div class="row">
			<div class="sidebar">
			  <a class="active" href="painel.php">Home</a>
			  <a href="painelProcurar.php">Procurar</a>
			  <a href="#painelHistorico">Caixa de Entrada</a>
			  <!--<a href="#about">Sobre</a>-->
			
			</div>
	</div>
</div>

<script type="text/javascript">
  
   $(document).ready(function(){

	   $("#botao_voltar").click(function(){
	  window.location="logout.php";  
	
	  });  
});

</script>

	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
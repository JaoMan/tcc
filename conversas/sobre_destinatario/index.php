<?php 
session_start();
include("../../conexao.php");
include_once("../../verifica_login.php");
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
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body style="background-color: rgba(300,300,0,0.3);">

<div class="navbar  bg-dark">
    <ul class="nav justify-content-end">
    <li class="nav-item">
      <button type="button" class="btn btn-outline-warning" id="botao_voltar">Voltar</button>
    </li>
    </ul>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="nome_destinatario"><?php echo $_SESSION["nome_destinatario"]; ?></h1>
    <strong>Dados</strong> 
  </div>
</div>

<div class="container">
	<div class="row alert alert-success" align="right"> 
		<div class="col-6" align="left">
			<span> 364 </span>
 		</div>
		<div class="auto">
	  		Mensagens enviadas
		</div>
	</div>

	<div class="row alert alert-success" align="right"> 
		<div class="col-6" align="left">
			<span> 293</span>
 		</div>
		<div class="auto">
	  		Pessoas alcançadas
		</div>
	</div>

	<div class="row alert alert-success" align="right"> <!---->
		<div class="col-6" align="left">
			<span>  93 min </span>
 		</div>
		<div class="auto">
	  		Tempo de uso
		</div>
	</div>

	<div class="row alert alert-success" align="right"> <!---->
		<div class="col-6" align="left">
			<span>  Masculino </span>
 		</div>
		<div class="auto">
	  		Sexo
		</div>
	</div>

</div>






</body>
<script type="text/javascript"> 					 /*----------	 JQUERY 	----------*/
	
$(document).ready(function(){
  $("#botao_voltar").click(function(){
  window.location="../chat.php";	
	}); 

  
	$('#action_menu_btn').click(function(){
		$('.action_menu').toggle();
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
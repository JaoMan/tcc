<?php 
session_start();
include("../conexao.php");
include_once("../verifica_login.php");


 $id_destinatario = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
 $_SESSION['id_destinatario'] = $id_destinatario;

 $query = "SELECT * FROM usuario WHERE id='$id_destinatario' ";			

	 
	$result = mysqli_query($conexao, $query);
	 
	while ($row_destinatario = mysqli_fetch_assoc($result)) {
			$_SESSION["nome_destinatario"] = $row_destinatario["nome"];
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

		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/script.js"></script>


</head>
<body style="background-color: rgba(300,300,0,0.3);">

<div class="navbar  bg-dark">
    <ul class="nav justify-content-end">
    <li class="nav-item">
      <button type="button" class="btn btn-outline-warning" id="botao_voltar">Voltar</button>
    </li>
    </ul>
</div>

<!-- A vertical navbar -->
<nav class="navbar bg-light justify-content-center  lista_lateral col-1">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="sobre_destinatario"><i class="far fa-user"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href=""><i class="fas fa-exclamation-triangle"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#Favoritarconversa"><i class="far fa-star"></i></a>
    </li>
  </ul>

</nav>

<div id="area_chat">
	
		
		<ul class="navbar-nav icone-perfil">
	    <li class="nav-item"> 						<!-- ICONE -->
	      <a class="nav-link"><i class="far fa-user"></i></a>
	    </li>
		</ul>
	 <br>
		<h6 class="nome-destinatario"> <?php echo $_SESSION["nome_destinatario"]; ?> </h6>
		<hr>

		<br>
			
<div id="lista">

</div>

		<div class="card-footer">	<!-- Caixa de resposta-->
			<form id="form-chat" action="" method="POST" enctype="multipart/form-data">

				<div class="input-group">

					<div class="input-group">
						<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control" />
						<span class="input-group-btn">
							<input type="submit" value="Enviar" class="btn btn-success">
							<input type="hidden" name="env" value="envMsg"/>
						</span>
					</div>

				</div>

			</form>

	<?php
		if(isset($_POST['env']) && $_POST['env'] == "envMsg"){
			$mensagem = $_POST['mensagem'];
			$id_para = $id_destinatario;
			$id_de = $_SESSION['id'];

			if(empty($mensagem)){
				echo "<code>Digite sua mensagem</code>";
			}else{

				$sql = "INSERT INTO mensagens (id_de, id_para, mensagem)
				VALUES ('$id_de', '$id_para', '$mensagem') ";

				if ($conexao->query($sql) === TRUE) {
					
				} else {

				    echo "Error: " . $sql . "<br>" . $conexao->error;
				}

				$conexao->close();


			}
		}
	?>
		</div>

	</div>


						




<script type="text/javascript"> 					 /*----------	 JQUERY 	----------*/
	
$(document).ready(function(){

  $("#botao_voltar").click(function(){
  window.location="../painel.php";	
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
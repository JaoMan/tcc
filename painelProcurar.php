<?php 

session_start();
include("conexao.php");
include_once("verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Painel</title>
	
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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


<div class="container-fluid ">
	<div class="row">
			<div class="sidebar">
			  <a href="painel.php">Home</a>
			  <a class="active" href="#">Procurar</a>
			  <a href="#painelHistorico">Caixa de Entrada</a>
			  <!--<a href="#about">Sobre</a>-->
			
			</div>
	</div>
</div>
			
<div class=" row  justify-content-center pesquisa_usuario_mensagem ">
    <div class="col-12 col-md-10 col-lg-8 ">
        
        <form class="card card-sm" method="post" action="">
            <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="fas fa-search"></i>
                </div>
                <!--end of col-->
                <div class="col">
                    <input type="text" class="form-control form-control-lg form-control-borderless" name="pesquisa" id="pesquisa" placeholder="Para quem você quer mandar mensagem?">
                </div>
            </div>
            <table class="table">
	    	<tr class="col-12">	
	 			<td class=" resultado ">
	 				
	 			</td>
	 		</tr>
	    </table>
        </form>

    <!--end of col-->
	</div>  

</div>	



<style type="text/css">
	
 
.table{
	position: static;	
}	
.resultado{
	background-color: white;
	border-radius: 5px;
}	
.nome{
    border-left: 6px solid green;
    color: black;
    padding: 5px;
}




</style>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/personalizado.js"></script>
</body>
</html>
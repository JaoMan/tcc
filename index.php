<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Correio do Bem</title>
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


<header>
  <div class="navbar bg-dark ">
    <h1 id="titulo">Correio do Bem</h1>
    
   <div class="btn-group btn-group-lg">
  <!--<button type="button" class="btn btn-outline-warning" id="botao_registro" >Registrar</button>-->
  <button type="button" class="btn btn-outline-warning" id="botao_login">Login</button>
  <button type="button" class="btn btn-outline-warning" id="botao_sobre">Sobre</button>
</div>

                  <!-----------  FORMULARIO DO LOGIN   ----------->

      <form  method="POST" action="login.php" id="formulario">
          <input type="email"  name="email" placeholder="  Email" required autofocus>
          <input type="password" name="senha"  placeholder="  Senha"  required>          
          <button type="submit" class="btn btn-outline-warning">Entrar</button>
      </form>
                <!-----------  FIM DO FORMULARIO DO LOGIN   ----------->


</div>
</header>
	

<?php
include_once("mensagem.php")
 ?>


<br>
<br>


														 <!----	INICIO DO CAROUSEL	---------->

<div class="container">

<div class="row">
	<div id="demo" align="center" class="carousel slide" data-ride="carousel">           
	  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="img-fluid circulo-img-carousel" src="img/img1.jpg" class="circulo-img-carousel">
		    </div>
		    <div class="carousel-item">
		      <img class="img-fluid circulo-img-carousel" src="img/img2.jpg">
		 	</div>
		 	<div class="carousel-item ">
		      <img class="img-fluid circulo-img-carousel" src="img/img3.jpeg">
		  </div>
		    <div class="carousel-item">
		      <img class="img-fluid circulo-img-carousel" src="img/img6.jpg">
		  </div>

		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
																	
	  </div>
	</div>	
</div>												<!----	FIM DO CAROUSEL	---------->	

	<div class="row">
		 <div class="col-sm-6 col-md-6" align="center" > <hr>
		    	<h1 align="center">Correio do Bem</h1>
				<p>Inspirada no Setembro Amarelo, mês dedicado a campanhas em favor da vida e contra o suicídio, o Grêmio Estudantil trouxe para dentro do Instituto Federal Catarinense - CAS, o projeto Correio do Bem. Com a função de estimular que os alunos escrevessem mensagens ou cartas positivas para outros alunos.</p>
		 </div>

		 <div class="col-sm-6 col-md-6" align="center" ><hr>
			<h1 align="center">Grêmio Estudantil</h1>
			<p>É uma organização sem fins lucrativos que representa o interesse dos estudantes e que tem fins cívicos, culturais, educacionais, desportivos e sociais.</p>
		 </div>

		<div class="col-sm-6 col-md-6" align="center" ><hr>
			<h1 align="center">IFC-CAS</h1>
			<p>Este site está sendo desenvolvido pelos alunos João Gabriel de Souza Moro e João Manoel Lummertz Scheffer, com o intuito de agilizar o envio e entrega de bilhetinhos do Correio do Bem.</p>
		</div>
	
		<div class="col-sm-6 col-md-6" align="center" ><hr>
			<h1 align="center">Institulo Federal Catarinense</h1>
			<p>Os Institutos Federais são instituições que atuam na oferta da educação profissional e tecnológica, em todos os seus níveis e modalidades, formando e qualificando cidadãos com vistas na atuação nos diversos setores da economia, com ênfase no desenvolvimento socioeconômico local, regional e nacional.</p>
		</div>
	</div>

</div>

<br>
<hr>


<div class="jumbotron">
	<h1 align="center">Desenvolvedores</h1>
<!--
<div class="row">
    <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/perfilsobre/perfilJoao.jpg" alt="João Manoel" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>João Manoel</h1>
        <p>Aluno</p>
        <p>Jovem Padawan</p>
        <a href="#"><i class="fab fa-instagram"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 

      </div> 
    </div>
  </div>

    <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/perfilsobre/perfilJoaogabriel.jpg" alt="João Gabriel" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>João Gabriel</h1>
        <p>Aluno</p>
        <p>Jovem Padawan</p>

      <a href="#"><i class="fab fa-instagram"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 

      </div>
    </div>
  </div>

    <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/perfilsobre/jeferson.jpg" alt="Jeferson" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Jeferson</h1>
        <p>Professor</p>
        <p>Redes de computadores</p>

      <a href="#"><i class="fab fa-instagram"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 

      </div>

    </div>
  </div>

    <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/perfilsobre/marahelf.jpg" alt="Mara" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>Mara</h1>
        <p>Professora</p>
        <p>Filosofia</p>

      <a href="#"><i class="fab fa-instagram"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 

      </div>

    </div>
  </div>
</div>-->
	
<div class="card">
  <img src="img/perfilsobre/perfilJoao.jpg" alt="João Manoel" style="width:100%">
  <div class="container">
    <h4><b>João Manoel</b></h4> 
    <p class="title">Institulo Federal</p>
    <p>Aluno</p> 
    <div style="margin: 1em 0;">
    <a href="#"><i class="fab fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button class="btn_card">Contact</button></p>
  </div>
</div>


 <div class="card">
  <img src="img/perfilsobre/perfilJoaoGabriel.jpg" alt="João Gabriel" style="width:100%">
  <div class="container">
    <h4><b>João Gabriel</b></h4> 
    <p class="title">Institulo Federal</p>
    <p>Aluno</p> 
    <div style="margin: 1em 0;">
    <a href="#"><i class="fab fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button class="btn_card">Contact</button></p>
  </div>
</div>
 
<div class="card">
  <img src="img/perfilsobre/jeferson.jpg" alt="Jeferson" style="width:100%">
  <div class="container">
    <h4><b>Jeferson</b></h4> 
    <p class="title">Institulo Federal</p>
    <p>Professora de Redes</p> 
    <div style="margin: 1em 0;">
    <a href="#"><i class="fab fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button class="btn_card">Contact</button></p>
  </div>
</div>



<div class="card">
  <img src="img/perfilsobre/marahelf.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Mara</b></h4> 
    <p class="title">Institulo Federal</p>
    <p>Professora de Filosofia</p> 
    <div style="margin: 1em 0;">
    <a href="#"><i class="fab fa-instagram"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button class="btn_card">Contact</button></p>
  </div>
</div> 





<!-- Rodapé 

<div class="footer">
  <p>Footer</p>
</div>-->


<style>
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: absolute;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: yellow;
  color: black;
  transform: rotateY(180deg);
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.circulo-img-carousel {
  border-radius: 50px 50px 50px 50px;
}

.container {
  padding: 2px 16px;
}
</style>





<script type="text/javascript"> 					 /*----------	 JQUERY 	----------*/
	
$(document).ready(function(){

  $("#botao_login").click(function(){
  $("#formulario").toggle();	
	}); 

  $("#botao_registro").click(function(){
  window.location="registro.php";	
	}); 

  $("#botao_sobre").click(function(){
  window.location="sobre.php";

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
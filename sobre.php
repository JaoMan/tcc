<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sobre</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- EDITOR CSS -->
<link rel="stylesheet" type="text/css" href="css/stylesheets.css">
</head>

<body>

  <div class="navbar bg-dark">
    <h2 id="titulo">Correio do Bem</h2>
    <ul class="nav justify-content-end">
    <li class="nav-item">
      <button type="button" class="btn btn-outline-warning" id="botao_voltar">Voltar</button>
    </li>
    </ul>
  </div>









</body>
<script type="text/javascript"> 					 /*----------	 JQUERY 	----------*/
	
$(document).ready(function(){

  $("#botao_voltar").click(function(){
  window.location="index.php";	
	}); 

  $("#titulo").click(function(){
  window.location="index.php";	
	});  
  

});
</script>	

</body>
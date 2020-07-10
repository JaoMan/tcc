<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  
  

</head>

<body id="body">

<div class="navbar bg-dark">
    <h2 id="titulo" >Correio do Bem</h2>
    <ul class="nav justify-content-end">
    <li class="nav-item">
      <button type="button" class="btn btn-outline-warning" id="botao_voltar">Voltar</button>
    </li>
    </ul>

</div>
<hr>

	
                                              
                                  

	<div class="container col-sm-6 col-md-6" id="formulario" align="center">      <!-- ------------------------ FORMULARIO DE CADASTRO ------------------------- -->
				<form  method="POST" action="cadastro.php" class="needs-validation">
                  <div class="form-group">
                    <label for="umane">Nome Completo</label>
                    <input type="text" class="form-control " id="umane" placeholder="nome completo" name="nome" maxlengt="50" required>
                    <div class="valid-feedback">Válido</div>
                    <div class="invalid-feedback">Não deixe este campo vazio.</div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-6">
                          <label for="uname">Email</label> 
                          <input type="email" class="form-control "  placeholder="email" name="email"  minlength="10" maxlengt="50" required>
                          <div class="valid-feedback">Válido.</div>
                          <div class="invalid-feedback">Não deixe este campo vazio.</div>
                    </div> 
                  


                  
                    <div class="form-group col-6 ">
                      <label for="umane">Matricula</label> 
                      <input type="text" class="form-control"  placeholder="matricula" name="matricula" maxlength="10" minlength="10" required>
                      <div class="valid-feedback">Válido.</div>
                      <div class="invalid-feedback">Não deixe este campo vazio.</div>
                    </div>
                  
                  </div>


                 <div class="form-row">
                  <div class="form-group col-6">
                    <label >Senha</label>
                    <input type="password" class="form-control" id="psw" placeholder="senha" name="senha" maxlength="32" minlength="8" required>
                    <div class="valid-feedback">Válido</div>
                    <div class="invalid-feedback">Não deixe este campo vazio.</div>                  
                   </div>
	                 <div class="btnMostrarSenha"><button type="button" class="btn btn-warning btn-xs" onclick="mostrarSenha()">Mostrar</button></div>
                    </div>

                   <div class="form-group form-check ">
                     	<button type="submit" class="btn btn-outline-primary" id="botao_criarConta">Criar</button>
                      
                  <div>
                        
                </form>
		</div>                                  <!-- FIM DO FORMULARIO DE CADASTRO -->

<style type="text/css">
input[type=text] {
  border: none;
  border-bottom: 2px ;
}
input[type=password] {
  border: none;
  border-bottom: 2px ;  
}
input[type=email] {
  border: none;
  border-bottom: 2px ;  
}

button{
    margin: 5px;
  }

input{
  border-radius: 5px;
}

body{
  background-color: rgba(300,300,100,0.7);
}



#titulo{
  color: orange;
  font-size: 2em;
  margin-left: 2em;
  cursor: pointer;
}

*{
   font-family: courier,arial,helvetica; 
}

.carousel-inner img {
      width:  100%;
      height: 100% ;
  }
#login{
    background-color: black;

  }  
#recepcao {
  font-size: 4em;


}

*{
   font-family: suruma; 
}


a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}


#nome_titulo{
  font-size: 2em;
  margin: 2em;
  cursor: pointer;
}

.btnMostrarSenha{
	padding: 2em;
}


</style>
<script type="text/javascript">
  
   $(document).ready(function(){

   $("#botao_voltar").click(function(){
  window.location="painel.php";  
  });  

   $("#titulo").click(function(){
  window.location="painel.php";
  }); 

  
});

</script>
<script>
      /*MOSTRAR SENHA DO USUARIO*/
   function mostrarSenha(){
        var tipo = document.getElementById("psw");
        if(tipo.type == "password"){
          tipo.type = "text";
        }else{
          tipo.type = "password";
        }
      }
</script>

</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

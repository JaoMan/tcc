<!DOCTYPE html>
<?php 
session_start();
include_once("../conexao.php");
include ("verifica_login.php");



?>
<html lang="pt-br">
<head>
	<title>Perfil</title>
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

<body id="body">


<div class="navbar bg-dark">
    
      <button type="button" class="btn btn-outline-warning" id="botao_voltar">Voltar</button>
    
</div>

<div id="nome_titulo">
    <h1><?php 
          $primeiroNome = explode(" ", $_SESSION['nome']);
            if (isset($primeiroNome[1])) {
              echo "$primeiroNome[0] $primeiroNome[1]"; 
            }else{
              echo "$primeiroNome[0]"; 
            }
           ?>
    </h1>
</div>


<div class="container">
  <?php
                                     /*Mensagem de ERRO ao alterar dados*/ 
  if (isset($_SESSION['msgErro'])) {
?>
<div class="alert alert-danger" role="alert"> Erro ao atualizar perfil!
    <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php 
  unset($_SESSION['msgErro']);
}
  
?>

<form method="POST" action="proc/proc_edit_usuarioLOG.php">        
  <table class="table table-striped col-12">
    <thead>
      <tr>
        <th>DADOS DO ADMINISTRADOR</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td><label >Nome:</label>
          <input type="text" name="nome" class="form-control input-sm"  value="<?php echo $_SESSION['nome'];   ?>" minlength="10"  maxlength="50" required></td>
            
      </tr>
      <tr>
        <td><label>Email:</label>
          <input type="text" name="email" class="form-control input-sm"  value="<?php echo $_SESSION['admin_login_email'];   ?>"  minlength="10" maxlength="50" required></td>
      </tr>
    </tbody>
  </table>
  <button type="submit" name="btn_salvarPerfil" class="btn btn-success">Salvar</button>
  </form>



</div>

</body>



<!-- ------------------------------------------------------------------------------------------ -->

<script type="text/javascript">
  
   $(document).ready(function(){

   $("#botao_voltar").click(function(){
  window.location="painel.php";  
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
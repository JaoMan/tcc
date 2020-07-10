<!DOCTYPE html>
<?php 
session_start();
include_once("proc/conexao.php");
include ("proc/verifica_login.php");


  $id = filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_STRING);

      $query = "SELECT * FROM administrador WHERE id = '$id' ";
       
      $result = mysqli_query($conexao, $query);
       
      while ($row_admin = mysqli_fetch_assoc($result)) {
        $_SESSION['id_admin'] = $row_admin['id'];
        $_SESSION['nome_admin'] = $row_admin['nome'];
        $_SESSION['email_admin'] = $row_admin['email'];
        $_SESSION['matricula_admin'] = $row_admin['matricula'];
      }
      
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




<div class="container">

  <div class="col-4">
  <?php
    include("../avisos.php");
  ?>
  </div>

<form method="POST" action="proc/edit_adm.php">     

     
  <table class="table table-striped col-12">
    <thead>
      <tr>
        <th>DADOS DO USUÁRIO</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td><label >Nome:</label>
          <input type="text" name="nome" class="form-control input-sm"  value="<?php echo  $_SESSION['nome_admin'];   ?>" minlength="10"  maxlength="50" required></td>
            
      </tr>
      <tr>
        <td><label>Email:</label>
          <input type="text" name="email" class="form-control input-sm"  value="<?php echo $_SESSION['email_admin'];   ?>"  minlength="10" maxlength="50" required></td>
      </tr>
      <tr>
        <td><label>Matricula:</label>
          <input type="text" name="matricula" class="form-control input-sm"  value="<?php echo $_SESSION['matricula_admin'];   ?>"  minlength="10" maxlength="10" required></td>
      </tr>

    </tbody>
  </table>
  <button type="submit" class="btn btn-success " name="btn_salvarPerfil">Atualizar</button>
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
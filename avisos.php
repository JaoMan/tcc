<?php /* SUCESSO APAGAR USUARIO*/
      if (isset($_SESSION['msgSucessoApagarUsuario']))			
      {														
      ?>
      <div class="alert alert-success" role="alert"> Usuário apagado com sucesso!		
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php
      unset($_SESSION['msgSucessoApagarUsuario']);
      }
?>

<?php   /* ERRO APAGAR USUARIO */

      if (isset($_SESSION['msgErroApagarUsuario']))		
      {
      ?>
      <div class="alert alert-danger" role="alert"> Erro ao apagar usuário!				   
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">	
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php
      unset($_SESSION['msgErroApagarUsuario']);
      }
?>

<?php  /* SUCESSO APAGAR ADMINISTRADOR */
      if (isset($_SESSION['msgSucessoApagarAdmin']))								
      {			
      ?>
      <div class="alert alert-success" role="alert"> Administrador apagado com sucesso!
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php 
      unset($_SESSION['msgSucessoApagarAdmin']);
      }
?>

<?php /* Sucesso ao criar ADMINISTRADOR ---------------------------------------------*/ 
  if (isset($_SESSION['SucessoAdicionarAdministrador']))
  {
      ?>
      <div class="alert alert-success" role="alert"> Sucesso ao adicionar administrador!
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php 
      unset($_SESSION['SucessoAdicionarAdministrador']);
  }
?>

<?php /* ERRO APAGAR ADMINISTRADOR */
    if (isset($_SESSION['msgErroApagarAdmin']))								
    {
    ?>
    <div class="alert alert-danger" role="alert"> Erro ao apagar administrador!	
    <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php 
    unset($_SESSION['msgErroApagarAdmin']);
    }
?>

<?php /* MGM de SUCESSO ATUALIZAR PERFIL */

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

<?php  /*Mensagem de ERRO ao alterar dados*/ 
                                 
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


<?php  /*Mensagem de sucesso ao alterar dados*/ 
                                    
    if (isset($_SESSION['msgSucessoEditarUSU'])) {
    ?>
    <div class="alert alert-success" role="alert"> Sucesso ao alterar perfil!
    <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php 
    unset($_SESSION['msgSucessoEditarUSU']);
    }
?>

<?php  /*Mensagem de erro ao alterar dados de admin*/ 
                                    
    if (isset($_SESSION['msgErroEditarADMIN'])) {
    ?>
    <div class="alert alert-danger" role="alert"> Erro ao atualizar dados do administrador!
    <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php 
    unset($_SESSION['msgErroEditarADMIN']);
    }
?>

<?php  /*Mensagem de sucesso ao alterar dados de um administrador*/ 
                                    
    if (isset($_SESSION['msgSucessoEditarADMIN'])) {
    ?>
    <div class="alert alert-success" role="alert"> Sucesso ao alterar perfil!
    <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php 
    unset($_SESSION['msgSucessoEditarADMIN']);
    }
?>



<?php  /* Sucesso ao Adicionar Usuario */
  if (isset($_SESSION['SucessoAdicionarUsuario']))
  {
      ?>
      <div class="alert alert-success" role="alert"> Sucesso ao adicionar usuário!
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php 
      unset($_SESSION['SucessoAdicionarUsuario']);
  }
?>
<?php /* Sucesso ao alterar senha do usuario*/
  if (isset($_SESSION['SucessoAlterarSenhaUsuario']))
  {
      ?>
      <div class="alert alert-success" role="alert"> Sucesso ao alterar senha!
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php 
      unset($_SESSION['SucessoAlterarSenhaUsuario']);
  }
?>

<?php  /* Erro ao alterar senha do usuario */
  if (isset($_SESSION['ErroAlterarSenhaAtualUsuario']))
  {
  ?>
      <script>
         alert("Senha  incorreta!");
      </script>

      <?php 
      unset($_SESSION['ErroAlterarSenhaAtualUsuario']);
  } 
?>

<?php  /* Erro inesperado ao alterar senha do usuario*/
  if (isset($_SESSION['ErroAlterarSenhaUsuarioInesperado']))
  {
      ?>
      <div class="alert alert-danger" role="alert"> Oops.. erro inesperado! Tente mais tarde.
      <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php 
      unset($_SESSION['ErroAlterarSenhaUsuarioInesperado']);
  }
?>


<?php  /* Erro confirmar senha usuario */
  if (isset($_SESSION['ErroConfirmarSenhaUsuario']))
  {
  ?>
      <script>
         alert("As senhas não coincidem!");
      </script>
      <?php 
      unset($_SESSION['ErroConfirmarSenhaUsuario']);
  } 
?>
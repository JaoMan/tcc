 <?php

 if(isset($_SESSION['nao_autenticado'])){
  ?>
  <div class="alert alert-danger" role="alert"> Email ou senha incorretos!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
	}
	unset($_SESSION['nao_autenticado']);

?> 
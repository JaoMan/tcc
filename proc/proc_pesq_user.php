<?php
//Incluir a conexão com banco de dados
include_once '../conexao.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM usuario WHERE nome LIKE '%$usuarios%' ORDER BY nome asc LIMIT 10";
$resultado_user = mysqli_query($conexao, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		$_SESSION["destinatario"] = $row_user['nome'];
		 

		echo " <a  class='nome' href='conversas/chat.php?id=".$row_user["id"]."' type='button'> ".$row_user['nome']."  </a></br> ";

	}
}else{
	echo "Esta pessoa não possui conta no correio do bem ";
	
}
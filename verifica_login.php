<?php 


if (empty($_SESSION['usuario_login_email'])) {
	session_destroy();
	header("Location: index.php");
	exit();
}
?>
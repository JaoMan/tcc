<?php 


if (empty($_SESSION['admin_login_email'])) {
	header("Location: ../index.php");
	exit();
}
?>
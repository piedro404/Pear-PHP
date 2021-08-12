<?php 
	session_start();
	if(!$_SESSION['usuario']){
		header('Location: Login_P.php');
		exit();
	}
?>
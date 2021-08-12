<?php 
	session_start();
	unset($_SESSION['usuario']);
	header('Location: index.html');
	exit();
?>
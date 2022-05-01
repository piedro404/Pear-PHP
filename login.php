<?php 
	session_start();
	Include('conexao.php');
	if(empty($_POST['user_l']) || empty($_POST['password_l'])){
		header('Location: Login_P.php');
		exit();
	}
	
	$User_l = mysqli_real_escape_string($c,$_POST['user_l']);
	$Password_l = mysqli_real_escape_string($c,$_POST['password_l']);

	$query_s = sprintf("SELECT `Senha` FROM `usuario` WHERE `Username`= '$User_l' or `Email`= '$User_l'");
	$dados_s = mysqli_query($c,$query_s);
	$linha_s = mysqli_fetch_assoc($dados_s);
	$Senha_BD = $linha_s['Senha'];
	$result_s =(int)(password_verify($Password_l,$Senha_BD));

	$query = "SELECT `Username`,`ID_User` FROM `usuario` WHERE `Username`= '$User_l' or `Email`= '$User_l'";

	$result = mysqli_query($c,$query);
	$row = mysqli_num_rows($result);
	#echo $row;
	#echo $result_s;exit();
	if($row == 1 and $result_s == 1){
		$query_u = sprintf("SELECT `Username` FROM `usuario` WHERE `Username`= '$User_l' or `Email`= '$User_l'");
		$dados_u = mysqli_query($c,$query_u);
		$linha_u = mysqli_fetch_assoc($dados_u);
		$Username = $linha_u['Username'];
		$_SESSION['usuario'] = $Username;
		mysqli_close($c);
		header('Location: Painel.php');
		exit();
	}
	else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: Login_P.php');
		exit();
	}
?>
<?php
	session_start();
	Include("conexao.php");
	$Name = mysqli_real_escape_string($c,ucwords($_POST['name_u']));
	$Username = mysqli_real_escape_string($c,$_POST['username']);
	$Email = mysqli_real_escape_string($c,$_POST['email']);
	$Password = password_hash(mysqli_real_escape_string($c,$_POST['password_u']), PASSWORD_DEFAULT);
	$Endereco = mysqli_real_escape_string($c,mb_strtoupper($_POST['endereco'],"utf-8"));
	$Cidade = mysqli_real_escape_string($c,mb_strtoupper($_POST['cidade'],"utf-8"));
	$Pais = mysqli_real_escape_string($c,mb_strtoupper($_POST['pais'],"utf-8"));
	$Idade = mysqli_real_escape_string($c,$_POST['idade']);
	


	if($Idade >= 18 and $Pais == "BRASIL" or $Pais == "BR"){
	$query="INSERT INTO `usuario`(`Nome`, `Username`, `Email`, `Senha`, `Endereco`, `Cidade`, `Pais`, `Idade`) VALUES ('$Name','$Username','$Email','$Password','$Endereco','$Cidade','$Pais','$Idade')";
	$res = mysqli_query($c,$query);

	if(!$res){
		$_SESSION['resposta'] = 1;
	 }
	else{
		$_SESSION['resposta'] = 0;
	}
	sleep(1);
	mysqli_close($c);
	header('Location: Resposta.php');
	exit();
	}
	else{
		$_SESSION['resposta'] = 2;
		sleep(1);
		header('Location: Resposta.php');
		exit();
	}
	?>
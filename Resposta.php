<!DOCTYPE html>
<?php 
	session_start();
?>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<title>Resposta  |  Pear</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="icon" type="imagem/png" href="https://i.ibb.co/L87HXkq/pngwing-com.png">
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
<img src="https://i.ibb.co/41Y807G/Home.png" class="imagem_back">
<div class="opcao">
	
<?php
		$res = $_SESSION['resposta'];
		if($res == 1):
			echo "<br><br><p>Já possui uma conta usando este Username ou Email, Altere e Tente Novamente!<p>";
	?>
		<br><a href="Cadastro.html" class="button b">Cadastrar</a>
<?php
		endif;
		if($res == 0):
			echo "<br><br><p>Sua Conta foi Registrada com Exito!<p>";
	?>
		<br><a href="Login_P.php" class="button b">Login</a>
<?php
		endif; 
		if($res == 2):
			echo "<br><br><p>Sua Conta não foi Registrada pelo Fator de Apresentar Idade Menor que 18(Idade<18) ou Nacionalidade não Brasileira(Pais!=BR or Brasil)!<p>";
	?>
	<br><a href="Cadastro.html" class="button b">Cadastrar</a>
<?php
		endif; 
	?>
</div>
</body>
</html>

<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<title>Login  |  Pear</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
	<link rel="icon" type="imagem/png" href="https://i.ibb.co/L87HXkq/pngwing-com.png">
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
<img src="https://i.ibb.co/3kvCNhf/Artboard-1-4x.png" class="imagem_back">

<div class="box">
	<h1>Login</h1><br>
	<?php  
		if(isset($_SESSION['nao_autenticado'])):
	?>
	<div class="mens">
		<p>ERRO: Usuário/Email ou senha inválidos.</p>
	</div>
	<?php  
		unset($_SESSION['nao_autenticado']);
		endif;
	?>
	<form action="login.php"	method="post">
		<label for="user_l">Username ou Email:</label>
		<input type="text" name="user_l" required="true" minlength="5" placeholder="Seu Nick ou Email"><br>
		<label for="password_l">Senha:</label>
		<input type="password" name="password_l" required="true" minlength="6" placeholder="Sua Senha"><br>
		<button type="submit" value="OK">Entrar</button><br><br>
		<a href="Cadastro.html">Acabou de Chegar?	 |	Cadastrar</a><br><br>
		<a href="index.html">Home</a>
	</form>
</div>
<div class="bottom_box"><p class="text_bottom">O Tempo não esPera<br><br>2019-2021	Pear&reg;</p></div>
</body>
</html>
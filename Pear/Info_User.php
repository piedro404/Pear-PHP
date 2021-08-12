<?php 
  Include('conexao.php');
	Include('verifica_login.php');
  $Username = $_SESSION['usuario'];
  $query_i = sprintf("SELECT `Nome`, `Username`, `Email`, `Endereco`, `Cidade`, `Pais`, `Idade` FROM `usuario` WHERE `Username`= '$Username'");
  $dados_i = mysqli_query($c,$query_i);
  $linha_i = mysqli_fetch_assoc($dados_i);
  mysqli_close($c);
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<title>Info-Painel | Pear</title>
	<link rel="stylesheet" type="text/css" href="Info_User.css">
	<link rel="icon" type="imagem/png" href="https://i.ibb.co/L87HXkq/pngwing-com.png">
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
<img src="https://i.ibb.co/41Y807G/Home.png" class="imagem_back">
<div class="tela">
<br>
<h1>Ola, <?php echo $_SESSION['usuario'];?></h1>
<h2>Informações:</h2>
<div class="opcao">
  <hr>
  <?php  
    echo "<br>Nome: ",$linha_i['Nome'];
    echo "<br><br>Username: ",$linha_i['Username'];
    echo "<br><br>Email: ",$linha_i['Email'];
    echo "<br><br>Endereco: ",$linha_i['Endereco'];
    echo "<br><br>Cidade: ",$linha_i['Cidade'];
    echo "<br><br>Pais: ",$linha_i['Pais'];
    echo "<br><br>Idade: ",$linha_i['Idade'];
    echo "<br><br>";
  ?>
  <hr>
</div>
<div class="wrapper">
  <div class="link_wrapper">
    <a href="Painel.php" class="b_l">Back</a>
    <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
        <path d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z"/>
      </svg>
    </div>
  </div>
</div>
</div>
<div class="bottom_box"><p class="text_bottom">O Tempo não esPera<br><br>2019-2021<br>Pear&reg;</p></div>
</body>
</html>
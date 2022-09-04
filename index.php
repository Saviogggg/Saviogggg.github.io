<?php

$email_bd = "psa";
$senha_bd = "admin";

if(isset($_POST['bt_login'])){
  $email = $_POST['email'];
  $senha = $_POST['senha'];

    if($email == $email_bd && $senha == $senha_bd){
      header('Location: index.html');
    }else{
      echo "<div class=\"login\"><p>E-mail ou senha incorretos</p></div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="login_site.css">
	</head>
	<body>
<div class="login-box">
	<h2>Login</h2>
	<form action="index.php" method="POST">
	  <div class="user-box">
		<input type="text" name="email" required="">
		<label for="email">usuário</label>
	  </div>
	  <div class="user-box">
		<input type="password" name="senha" required="">
		<label for="senha">senha</label>
	  </div>
	  
<div class = "btlogin">
	  <input type="submit" value="Login" name="bt_login">
</div>
	</form>
  </div>
</body>
</html>
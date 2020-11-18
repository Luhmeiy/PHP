<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
$senha = ''; //previne que a variável $senha seja dada como indefinida
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-client_id" content="1050007894667-v30qos4sdt6cum67amemceh66ii7jv6h.apps.googleusercontent.com">
<head>
	<title>Login</title>
<!-- Início dos links externos -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/login.css">
<!-- Fim dos links externos -->
</head>
<body>
<?php
if (isset($_POST['login'])) { //verifica se a variável foi definida
    $senha = md5($_POST['senha']); //criptografa a senha utilizando md5
    $conn = "SELECT * FROM user WHERE nm_user = ".$_POST['login']." AND senha = ".$senha." OR email = ".$_POST['login']." AND senha = ".$senha.""; //verifica se os dados do login conferem
    if ($result = $mysqli->query($conn)){
        while ($obj = $result->fetch_object()){
            $_SESSION['COD_USER'] = $obj->cd_user; //adiciona o código de usuário na sessão
            header("location:index.php?al=2"); //redireciona o usuário
        }
    }
}
$conn->close();
?>
<center style="margin-top: 30vh;">
<h1><b>Login</b></h1>
<!-- form de login -->
<form method="POST" style="width: 280px;">
<div class="row">
	<!-- login com Google -->
	<div class="col-md-12">
	    <div class="g-signin2" data-onsuccess="onSignIn"></div>
	    <a href="#" onclick="signOut();">Sign out</a>
	</div>
</div>
	<div class="or-seperator"><b>ou</b></div>
	<!-- login convencional -->
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Usuário ou Email" name="login" required="required">
	</div>
	<div class="form-group">
		<input type="password" class="form-control" placeholder="Senha" name="senha" required="required">
	</div>
    <div class="g-recaptcha" data-sitekey="6LeJ79EZAAAAAOWXiYyH5t-Ee_1iHZ4DKphgT9NA" style="margin-left: -10px; margin-bottom: 10px;"></div>
		<input type="submit" class="btn btn-primary btn-block" value="Entrar" required="required">
	<div class="form-footer">
		<a href="email.php" style="float: left;">Esqueceu a senha?</a>
	</div>
	<div class="form-footer">
		<a href="cad.php" style="float: right;">Cadastre-se!</a>
	</div>
</form>
<!-- Fim do form de login -->
</center>
<script>
function onSignIn(googleUser) { //obtém as informações do usuário que fez login usando o Google
	var profile = googleUser.getBasicProfile();
	console.log('ID: ' + profile.getId());
	console.log('Name: ' + profile.getName());
	console.log('Email: ' + profile.getEmail());
   	var personName = profile.getName();
   	var personEmail = profile.getEmail();
   	var personId = profile.getId();
   	googleUser.disconnect();
   	window.location.href = "somepage.php?name=" + personName + "&email=" + personEmail + "&id=" + personId;	//redireciona o usuário junto com suas informações em variáveis
}
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}
</script>
</body>
</html>
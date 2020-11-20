<!DOCTYPE html>
<?php
session_start();
include "default/conect2.php";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-client_id" content="62573305395-vpfqs0d9eh02ciurc67gc18f8k9jra0j.apps.googleusercontent.com">
<head>
	<title>Login</title>
<!-- Início dos links externos -->
<?php include "default/bootstrap.php"; ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<!-- Fim dos links externos -->
</head>
<body>
<?php
if (isset($_POST['login'])) { //verifica se a variável foi definida
    $senha = md5($_POST['senha']); //criptografa a senha utilizando md5
    $sql = "SELECT * FROM user WHERE nm_user = '".$_POST['login']."' AND senha = '".$senha."' OR email = '".$_POST['login']."' AND senha = '".$senha."'";
    if ($result = $mysqli->query($sql)){
        while ($obj = $result->fetch_object()){
            $_SESSION['COD_USER'] = $obj->cd_user; //adiciona o código de usuário na sessão
            header("location:alert.php?al=2"); //redireciona o usuário
        }
    }
}
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
    <div class="g-recaptcha" data-sitekey="6Ld9FOQZAAAAAOha75z2k164mP6xmZYwE9imh3BP" style="margin-left: -10px; margin-bottom: 10px;"></div>
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
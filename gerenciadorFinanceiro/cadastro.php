<?php
session_start();
include "conecta.php";
if (isset($_POST['login'])){
$sql = "INSERT INTO tb_usuario (cd_usuario, nm_usuario, ds_login, ds_senha) VALUES (NULL,'".$_POST['usuario']."', '".$_POST['login']."','".$_POST['senha']."')";
if ($conn->query($sql) === TRUE) {
} 
echo "foi";
header('location:index.php');
}else{
	echo $conn->error;
}
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Gerenciador Financeiro</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
<form method="POST">
<center><div class="container" style="padding-top:15%;;">
	<div class="col-lg" style="border: solid black; height: auto; width: 350px; padding-left: 10px; border-radius: 10px; padding-top: 20px;">
	Login: 
	<input class="form-control" type="text" name="login" style="display: inline; width: 250px;"><br>
	<br>
	Senha: 
	<input class="form-control" type="password" name="senha" style="display: inline; width: 250px;"><br>
	<br>
	Usuario: 
	<input class="form-control" type="text" name="usuario" style="display: inline; width: 250px;"><br>
	<br>
	<input type="submit" class="btn btn-success" value="Login"><br><br>
	</div>
</div></center>
</form>
</body>
</html>
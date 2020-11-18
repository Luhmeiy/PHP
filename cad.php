<!DOCTYPE html>
<?php 
    session_start();
    include "default/conect2.php"; 
?>
<html>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<meta charset="utf-8">
<head>
<title>Cadastro</title>
<!-- Início dos links externos -->
<?php include "default/bootstrap.php"; ?>
<!-- Fim dos links externos -->
</head> 
<body>
<?php
if (isset($_POST['user'])){ //verifica se a variável foi definida
    $senha = md5($_POST['senha']); //criptografa a senha utilizando md5
    if ($result = $mysqli->query("SELECT * FROM user WHERE email = '".$_POST['email']."'")) {
        /* determine number of rows result set */
        $row_cnt = $result->num_rows;
        if ($row_cnt == 0) {
            $query = "INSERT INTO user (cd_user, email, nm_user, senha) VALUES (NULL, '".$_POST['email']."', '".$_POST['user']."', '".$senha."')";
            if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
                    header("location:alert.php?al=1",true); //redireciona o usuário
        	    }
        	}
        }
        else{
            echo "Email já cadastrado";
        }
    }
}
?>
<center style="margin-top: 30vh;">
<h1><b>Cadastro</b></h1>
<!-- Início do form de cadastro -->
<form method="POST" style="width: 280px;">
	<div class="form-group">
		<input type="email" class="form-control" placeholder="Email" name="email" required="required">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Usuário" name="user" required="required">
	</div>
	<div class="form-group">
		<input type="password" class="form-control" placeholder="Senha" name="senha" required="required">
	</div>
	<div class="form-group">
		<input type="password" class="form-control" placeholder="Confirme a senha" name="senha1" required="required">
	</div>
	<div class="form-group">
		<label class="checkbox-inline"><input type="checkbox" required="required"> Eu aceito os <a href="termos.php">Termos &amp; Condições</a></label>
	</div>
	<input type="submit" class="btn btn-primary btn-block" value="Cadastrar">
</form>
<!-- Fim do form de cadastro -->
</center>
</body>
</html> 
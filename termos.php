<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Sobre Nós</title>
<!-- Início dos links externos -->
<?php include "bootstrap.php"; ?>
<link rel="stylesheet" type="text/css" href="CSS/car.css">
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Fim dos links externos -->
</head>
<body>
<!-- Início do header -->
<?php include 'default/header.php'; ?>
<!-- Fim do header -->
<div class="container">
<center><div class="row justify-content-center" id="col4">
	<div class="col-md-12">
		<h1>Termos de Uso</h1>
	</div>
	<hr id="hr">
</div></center>
<!-- História -->
<p>Por favor, leia os termos e condições com atenção. Ao se cadastrar neste site, você concorda com os termos deste site. Note que a rejeição destes termos impedirá que você faça pedidos em nosso site.</p>
<p>Efetuado com sucesso o cadastro do usuário, este se obriga a não divulgar a terceiros login e senha de acesso, nem permitir o uso de tais informações por terceiros, responsabilizando-se pelas consequências do uso de login e senha de sua titularidade.</p>
<p>Protegeremos a confidencialidade de todas as informações e registros relacionados ao usuário, armazenando no servidor ou em qualquer outro meio magnético de alta segurança, bem como o valor relativo às operações financeiras decorrentes da operação dos serviços prestados neste termo.</p>
<p>Contudo, não responderemos pela reparação de prejuízos que possam ser derivados de apreensão de dados por parte de terceiros que, rompendo os sistemas de segurança, consigam acessar essas informações.</p>
</div>
<div style="float: bottom;">
<?php include "default/footer.php"; ?>
</div>
<style type="text/css">
#text{
	font-size: 25px;
	text-align: justify;
}
#hr{
	width: 20%;
}
#col4{
	padding-top: 50px; 
	width: 80%;
}
</style>
</body>
</html>
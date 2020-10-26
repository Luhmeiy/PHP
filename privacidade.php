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
<?php
include "bootstrap.php";
?>
<link rel="stylesheet" type="text/css" href="CSS/car.css">
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Fim dos links externos -->
</head>
<body>
<!-- Início do header -->
<?php
include 'default/header.php';
?>
<!-- Fim do header -->
<div class="container">
<center><div class="row justify-content-center" id="col4">
	<div class="col-md-12">
		<h1>Termos de Uso</h1>
	</div>
	<hr id="hr">
</div></center>
<!-- História -->
<p>Proteger seus dados e sua privacidade é muito importante para nós. Recomendamos que você entenda nossa abordagem como um todo, mas aqui estão alguns pontos-chave para você entender como a empresa processa seus dados:
<p>Os dados que você registrar em nossa plataforma serão processados de forma segura e, para seus fins apropriados, restringimos o processamento.</p>
<p>Seus dados completos de cartão não ficam armazenados em nossas bases, mas sim em seu telefone celular ou dispositivo utilizado na compra.</p>
<p>Você pode alterar suas preferências de comunicação no próprio aplicativo, mas ainda poderemos contatá-lo para informações sobre o seu pedido.</p>
<p>Você poderá tirar suas dúvidas e solicitar informações a qualquer momento através da aba Ajuda em nossas plataformas.</p>
<p>Nós coletamos e usamos os dados para possibilitar transportes e entregas dos produtos de forma confiável e prática. Também usamos os dados coletados para:</p>
<ul>
    <li>Suporte aos clientes;</li>
    <li>Para pesquisa e desenvolvimento;</li>
    <li>Usos em processos judiciais;</li>
</ul>
<p>A menos que você concorde, não venderemos ou compartilharemos seus dados pessoais com terceiros para marketing direto.</p>
</div>
<?php
include "default/footer.php";
?>
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
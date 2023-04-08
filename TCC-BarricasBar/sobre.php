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
		<h1 style="font-size: 65px;">Sobre Nós</h1>
	<img src="https://cdn.discordapp.com/attachments/755835891779502357/767530692884037652/Barrica_banner.jpg" style="width: 100%;">
	</div>
</div></center>
<!-- Row 1 -->
<center><div class="row justify-content-center" id="col4">
	<!-- História -->
	<div class="col-md-6">
		<p id="text"><h1>História</h1></p>
		<p id="text">Barrica's Bar foi criado à partir do apelido entre amigos motociclistas, rockeiros, etc, que confraternizavam conosco.</p>
	</div>
	<!-- Objetivos -->
	<div class="col-md-6">
		<p id="text"><h1>Objetivo</h1></p>
		<p id="text">Reunir o público motociclista e amantes do rock'n'roll, ampliando assim os níveis de amizade ao nível estadual, nacional e internacional, bem como complementar a renda familiar.</p>
	</div>
</div></center>
<!-- Row 2 -->
<center><div class="row justify-content-center" id="col4">
	<!-- Diferenciais -->
	<div class="col-md-6">
		<p id="text"><h1>Diferenciais</h1></p>
		<p id="text">Único bar de motociclistas em Peruíbe, o qual também é o único que toca apenas rock e Blues. É tematizado através de quadros, peças, adereços e pinturas relativos ao rock. Tem palco e mesas ao ar livre sem couvert artístico.</p>
	</div>
	<!-- Produtos -->
	<div class="col-md-6">
		<p id="text"><h1>Produtos</h1></p>
		<p id="text">Uma vasta gama de cervejas, desde artesanais locais até importadas, porções populares desde batata frita até bolinhos de bacalhau, entre outros. Para públicos mais amenos, refrigerantes, sucos, café, água mineral, entre outros.</p>
	</div>
	<hr id="hr">
</div></center>
<!-- Quem está no Projeto -->
<center><div class="row justify-content-center" id="col4" style="padding-bottom: 50px;">
	<div class="col-md-12">
		<p id="text"><h1>Desenvolvedores</h1></p>
		<ul>
		    <li id="text">Celso dos Santos Negócio</li>
		    <li id="text">Cesar Ferreira Barrichello</li>
		    <li id="text">Enzo de Castro Umehara</li>
		    <li id="text">Gustavo Cauã dos Santos</li>
		    <li id="text">Juan Carlos Reis Guimarães</li>
		    <li id="text">Luiz Henrique Medeiros dos Santos</li>
		    <li id="text">Thiago Chiba Kenzo Suzuki</li>
		</ul>
	</div>
</div></center>
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
h1{
	color: orange;
}
#col4{
	padding-top: 50px; 
	width: 100%;
}
ul {
  columns: 2;
  -webkit-columns: 2;
  -moz-columns: 2;
}
li{
    text-align: left;
}
</style>
</body>
</html>
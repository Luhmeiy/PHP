<!DOCTYPE html>
<?php
	session_start();
	include "conecta.php";
?>
<html>
<meta charset="utf-8">
<head>
	<title>Preço</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<!--- NAV -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; font-size: 25px;">
	<a class="navbar-brand" href="index.php"><img src="IMGs/sun.png" id="sun" style="height: 100px; width: 100px;"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="corNavbar01">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
		<a class="nav-link" href="conta1.php">Conta</a>
		</li>
		<li class="nav-item">
		<a class="nav-link active" href="preco.php">Preços</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="sobre.php">Sobre</a>
		</li>
		</ul>
	<form class="form-inline">
	<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
	<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
	</form>
	</div>
</nav>
<!-- Preços -->
<form method="post" action="checkout.php">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
	<br>
	<div class="card-deck mb-3 text-center">
		<div class="card mb-4">
		<div class="card-header">
		<h4 class="my-0 font-weight-normal">1 mês</h4>
		</div>
		<div class="card-body">
		<h1 class="card-title">R$120 <small class="text-muted">/ mês</small></h1>
		<a href="checkout.php"><button type="submit" name="compra" value="1" class="btn btn-lg btn-block btn-primary">Contratar</button></a>
		</div>
		</div>
		<div class="card mb-4">
		<div class="ribbon-wrapper">
		<div class="ribbon green">10% off</div>
		</div>
		<div class="card-header">
		<h4 class="my-0 font-weight-normal">6 meses</h4>
		</div>
		<div class="card-body">
		<h1 class="card-title">R$108 <small class="text-muted">/ mês</small></h1>
		<a href="checkout.php"><button type="submit" name="compra" value="2" class="btn btn-lg btn-block btn-primary">Contratar</button></a>
		</div>
		</div>
		<div class="card mb-4">
		<div class="ribbon-wrapper">
		<div class="ribbon red">25% off</div>
		</div>
		<div class="card-header">
		<h4 class="my-0 font-weight-normal">12 meses</h4>
		</div>
		<div class="card-body">
		<h1 class="card-title">R$90 <small class="text-muted">/ mês</small></h1>
		<a href="checkout.php"><button type="submit" name="compra" value="3" class="btn btn-lg btn-block btn-primary">Contratar</button></a>
		</div>
		</div>
	</div>
</div>
</div>
</div>
</form>
<style type="text/css">
html{
	width: 100%!important;
}
#card{
	max-width: 18rem;
}
.ribbon-wrapper{
	width: 85px;
	height: 88px;
	overflow: hidden;
	position: absolute;
	top: -3px;
	right: -3px;
}
.ribbon{
	font-size: 12px;
	color: #FFF;
	text-transform: uppercase;
	font-family: 'Montserrat Bold', 'Helvetica Neue', Helvetica, Arial, sans-serif;
	letter-spacing: .05em;
	line-height: 15px;
	text-align: center;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	transform: rotate(45deg);
	position: relative;
	padding: 7px 0;
	right: -11px;
	top: 10px;
	width: 100px;
	height: 28px;
	-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .3);
	box-shadow: 0 0 3px rgba(0, 0, 0, .3);
	background-color: #dedede;
	background-image: -webkit-linear-gradient(top, #ffffff 45%, #dedede 100%);
	background-image: -o-linear-gradient(top, #ffffff 45%, #dedede 100%);
	background-image: linear-gradient(to bottom, #ffffff 45%, #dedede 100%);
	background-repeat: repeat-x;
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffdedede', GradientType=0);
}
.ribbon:before, .ribbon:after{
	content: "";
	border-top: 3px solid #9e9e9e;
	border-left: 3px solid transparent;
	border-right: 3px solid transparent;
	position: absolute;
	bottom: -3px;
}
.ribbon:before{
	left: 0;
}
.ribbon:after{
	right: 0;
}
.ribbon.green{
	background-color: #2da285;
	background-image: -webkit-linear-gradient(top, #2da285 45%, #227a64 100%);
	background-image: -o-linear-gradient(top, #2da285 45%, #227a64 100%);
	background-image: linear-gradient(to bottom, #2da285 45%, #227a64 100%);
	background-repeat: repeat-x;
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ff2da285', endColorstr='#ff227a64', GradientType=0)
}
.ribbon.green:before, .ribbon.green:after{
	border-top: 3px solid #113e33
}
.ribbon.red{
	background-color: #bc1a3a;
	background-image: -webkit-linear-gradient(top, #a61733 45%, #bc1a3a 100%);
	background-image: -o-linear-gradient(top, #a61733 45%, #bc1a3a 100%);
	background-image: linear-gradient(to bottom, #a61733 45%, #bc1a3a 100%);
	background-repeat: repeat-x;
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffa61733', endColorstr='#ffbc1a3a', GradientType=0);
}
.ribbon.red:before, .ribbon.red:after{
	border-top: 3px solid #8f142c;
}
</style>
</body>
</html>
<!DOCTYPE html>
<?php
	session_start();
	include "conecta.php";
?>
<html>
<meta charset="utf-8">
<head>
  <title>Escola Sol Feliz</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<!--- NAV -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; font-size: 25px;">
	<a class="navbar-brand" href="index.html"><img src="IMGs/sun.png" id="sun" style="height: 100px; width: 100px;"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="corNavbar01">
	<ul class="navbar-nav mr-auto">
	<li class="nav-item">
	<a class="nav-link" href="conta1.php">Conta</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="preco.php">Preços</a>
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
<!-- CARROSSEL -->
<div class="container-fluid">
<center>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width: 95%;">
	<div class="carousel-inner">
		<div class="carousel-item active">
		<img class="d-block w-100" src="IMGs/Escola3.JPG" id="img">
		<div class="carousel-caption d-none d-md-block" id="texto">
		<p>Interação com a família</p>
		<p>Em nossa escola nós prezamos pela família.</p>
		</div>
		</div>
		<div class="carousel-item">
		<img class="d-block w-100" src="IMGs/Escola2.JPG" id="img">
		<div class="carousel-caption d-none d-md-block" id="texto">
		<p>Ensino de qualidade</p>
		<p>Nossos professores são profissionais prontos para educar seu amado filho.</p>
		</div>
		</div>
		<div class="carousel-item">
		<img class="d-block w-100" src="IMGs/Escola.JPG" id="img">
		<div class="carousel-caption d-none d-md-block" id="texto">
		<p>Ótimas instalações</p>
		<p>Nossa escola conta com salas sempre novas, laboratórios e salas especiais.</p>
		</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Próximo</span>
	</a>
</div>
</center>
</div>
<!-- Site -->
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 box">
		<h2 class="texto">Nosso Espaço</h2>
		<p>Quem conhece nosso espaço se encanta. Além de salas do Berçário e de Educação Infantil a Sol Feliz conta com diferentes ambientes que as crianças podem explorar ao longo do dia. Adaptados à faixa etária dos nossos alunos, eles promovem vivências coletivas e individuais que favorecem o processo de aprendizagem criativa.	</p>
		<img src="IMGs/patio.JPG" id="wryyy">
		</div>
		<div class="col-md-4 box">
		<h2 class="texto">Sala de Aula</h2>
		<p>É aqui que todo o conhecimento dos professores é transmitido aos pequenos e aprendido por eles de forma cognitiva e lúdica. O ambiente é preparado para que os pequenos interajam, brinquem, escrevam e aprendam.</p>
		<img src="IMGs/sala.JPG" id="wryyy">
		</div>
		<div class="col-md-4 box">
		<h2 class="texto">Refeitório</h2>
		<p>Nosso espaço para sentir novos sabores e compartilhar alegres momentos. O contato precoce das crianças com o alimentos trazem diversos benefícios e criam hábitos saudáveis.</p>
		<img src="IMGs/refeitorio.JPG" id="wryyy">
		</div>
	</div>
	<hr class="mb-4">
	<div class="row">
		<div class="col-md-4 box">
		<h2 class="texto">Parque Ecológico</h2>
		<p>Os cuidados com os pequenos animais fazem parte de projetos que trazem o respeito ao meio ambiente para a vida real.</p>
		<img src="IMGs/parque.webp" id="wryyy">
		</div>
		<div class="col-md-4 box">
		<h2 class="texto">Quadra</h2>
		<p>Espaço para práticas com bola e outros elementos ao ar livre, além das atividades das aulas de Educação Física.</p>
		<img src="IMGs/quadra.JPG" id="wryyy">
		</div>
		<div class="col-md-4 box">
		<h2 class="texto">Piscina de Bolinha</h2>
		<p>Brincar na piscina de bolinhas estimula os sentidos dos pequenos, auxilia no desenvolvimento da coordenação motora e o equilíbrio, além de incentivar a visão e a imaginação com a variedade de cores, também cria a oportunidade de socialização.</p>
		<img src="IMGs/piscina.JPG" id="wryyy">
		</div>
	</div>
</div>
<br>
<style type="text/css">
body{
	background-color: #e3f2fd;
}
.box{
	text-align: center !important;
	float: left;
	width: 33% !important;
	min-width: 0px !important;
}
.titulo{
	font-size: 35px;
	color: #FFFFFF;
	font-weight: 700;
}
#texto{
	-webkit-text-stroke-width: 1px; 
	-webkit-text-stroke-color: black; 
	font-size: 30px; 
	font-weight: 900;
}
#img{
	height: 800px;
}
#wryyy{
	max-width:100%;
	max-height:100%;
}
</style>
</body>
</html>
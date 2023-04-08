<!DOCTYPE html>
<?php
    session_start();
    include "conecta.php";
?>
<html>
<meta charset="utf-8">
<head>
	<title>Sobre nós</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php
include "conecta.php";
if (isset($_POST['nome'])){
$sql = "INSERT INTO duvida (cd_duvida, nome, email, telefone, mensagem) VALUES (NULL, '".$_POST['nome']."','".$_POST['email']."','".$_POST['telefone']."','".$_POST['mensagem']."')";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
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
		<a class="nav-link" href="preco.php">Preços</a>
		</li>
		<li class="nav-item">
		<a class="nav-link active" href="sobre.html">Sobre</a>
		</li>
		</ul>
	<form class="form-inline">
	<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
	<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
	</form>
	</div>
</nav>
<!-- Sobre Nós -->
<center>
<section id="background">
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			<br>
			<h3 class="titulo" style="font-size: 50px !important;">Conheça nossa equipe!</h3>
			<p style="font-size: 24px; font-weight: 700; color: #96a6b7;">Nossa equipe é composta por profissionais especializados capazes de trazer educação de alta qualidade para seus filhos.</p>
		</div>
	</div>
</div>
</section>
<div class="row" id="background">
	<div class="col-md-2"></div>
	<div class="cold-md-8">
	<img src="IMGs/Escola4.webp" style="width: 80%;">	
	</div>
	<div class="col-md-2"></div>
</center>
<div id="background">
<br>
<hr>
</div>
<div id="background">
  <div class="container">
  <div class="row">
      <div style="text-align: center;">
  		<h1 class="titulo">Por que escolher nossa equipe?</h1>
  		<div class="box">
  		<img src="https://nuuvem.s3.amazonaws.com/images/paginas/recruitee/BUILD.png" alt="" class="icon">
  		<h2 class="texto">Construa</h2>
  		<p style="color: #96a6b7">Faça parte de uma escola em ascensão
  		</p>
  		</div>
  		<div class="box">
  		<img src="https://nuuvem.s3.amazonaws.com/images/paginas/recruitee/GROW.png" alt="" class="icon">
  		<h2 class="texto">Cresça</h2>
  		<p style="color: #96a6b7">Seu filho aprendera muito mais conosco
  		</p>
  		</div>
  		<div class="box">
  		<img src="https://nuuvem.s3.amazonaws.com/images/paginas/recruitee/COLLABORATE.png" alt="" class="icon">
  		<h2 class="texto">Colabore</h2>
  		<p style="color: #96a6b7">Um ambiente onde as crianças poderão interagir juntas
  		</p>
  		</div>
  		<div class="box">
  		<img src="https://nuuvem.s3.amazonaws.com/images/paginas/recruitee/PLAY.png" alt="" class="icon">
  		<h2 class="texto">Jogue</h2>
  		<p style="color: #96a6b7">Atividades lúdicas que ensinarão seus filhos com diversão
  		</p>
  		</div>
  		<div class="box">
  		<img src="https://nuuvem.s3.amazonaws.com/images/paginas/recruitee/LEARN.png" alt="" class="icon">
  		<h2 class="texto">Aprenda</h2>
  		<p style="color: #96a6b7">Ambientes virtuais simulados para seu filho aprender
  		</p>
  		</div>    
    </div>
  </div>
  </div>
</div>
<div id="background">
<hr>
</div>
<center>
<section id="background">
<br>
<div class="container">
    <div class="row justify-content-center">
    <h2 class="titulo">Fale Conosco</h2>
    </div>
    <div class="row justify-content-center">
      <div class="media-container-column col-lg-8">
			<form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="texto">Nome</label>
                    <input type="text" class="form-control" name="nome" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="texto">Email</label>
                    <input type="email" class="form-control" name="email" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label class="texto">Telefone</label>
                    <input type="number" class="form-control" name="telefone" required="">
                    </div>
                </div>
            </div>
            <div class="form-group" data-for="message">
            <label class="texto">Mensagem</label>
            <textarea type="text" class="form-control" name="mensagem" rows="7" required=""></textarea>
            </div>
			<button href="" type="submit" class="btn btn-warning form-control" style="width: 40%;">Enviar</button>
      </form>
      </div>
    </div>
</div>
<br>
</section>
</center>
<style type="text/css">
html{
	overflow-x: hidden;
}
#background{
	background-color: #070F19 !important;
}
.titulo{
	font-size: 35px;
	color: #FFFFFF;
	font-weight: 700;
}
.box{
	text-align: center !important;
	float: left;
	width: 20% !important;
	min-width: 0px !important;
}
.texto{
	font-size: 24px;
	font-weight: 700;
	color: white;
} 
.icon{
	max-width: 80px;
}
hr{
	display: block;
	unicode-bidi: isolate;
	margin-block-start: 0em;
	margin-block-end: 0em;
	margin-inline-start: auto;
	margin-inline-end: auto;
	border-style: inset;
	border-width: 1px;
}
</style>
</body>
</html>
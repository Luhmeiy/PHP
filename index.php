<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html style="overflow-x: hidden;">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Barrica's Bar</title>
<!-- Início dos links externos -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/car.css">
<link rel="stylesheet" type="text/css" href="CSS/map.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<script src="JS/js.js"></script>
<!-- Fim dos links externos -->
</head>
<body>
<!-- Início do header -->
<header id="header" style="overflow-x: hidden;">
<!-- Início do header interno -->
<header class="navbar navbar-light flex-column flex-md-row bd-navbar sticky atx hidden" style="overflow-x: hidden;">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="" id="content">
            <a href="loja.php" id="tudo">Produtos</a>
            <a href="sobre.php" id="tudo">Sobre Nós</a>
            <a href="local.php" id="tudo">Local</a>
            <a href="login.php" id="tudo">Conta</a>
        </div>
    </div>
    <button class="navbar-toggler collapsed mySidenav" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav();">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav-scroll" >
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a href="index.php" class="logo">Barrica's Bar</a>
            </li>
        </ul>
    </div>
</header>
<!-- Fim do header interno -->
<div class="row" id="row" style="width: 100%;">
<div class="col-md-6">
<center style="margin-top: 65px;"><a href="" class="logo1">Barrica's Bar</a></center>
</div>
<div class="col-md-6" id="list" style="color: solid white;">
    <center><h4 style="">
    <p><a href="loja.php" style="color: white;">Produtos</a></p>
    <p><a href="sobre.php" style="color: white;">Sobre nós</a></p>
    <p><a href="local.php" style="color: white;">Local</a></p>
    <p><a href="#contact" style="color: white;">Contato</a></p>
  <p><a href="login.php" style="color: white;">Conta</a></p>
    </h4></center>
</div>
</div>
</header>
<!-- Fim do header -->
<!-- Início do carrossel externo -->
<section class="banner" id="home" style="overflow-y: hidden; width: 100vw;">
	<div class="col-xs-12 justify-content-center" style="position: absolute;">
        <center><div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" style="padding-left: 0; padding-right: 0;">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="https://previews.123rf.com/images/voltan1/voltan11604/voltan1160400042/56363414-roasted-sliced-barbecue-pork-ribs-focus-on-sliced-meat.jpg" alt="First slide" id="blur" style="width: 100vw; height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://previews.123rf.com/images/voltan1/voltan11604/voltan1160400042/56363414-roasted-sliced-barbecue-pork-ribs-focus-on-sliced-meat.jpg" alt="Second slide" id="blur" style="width: 100vw; height: 100vh;">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="https://previews.123rf.com/images/voltan1/voltan11604/voltan1160400042/56363414-roasted-sliced-barbecue-pork-ribs-focus-on-sliced-meat.jpg" alt="Third slide" id="blur" style="width: 100vw; height: 100vh;">
                </div>
            </div>
        </div></center>
    </div>
    <!-- Fim do carrossel externo -->
    <!-- Início do carrossel interno -->
	<div class="col-xs-12 justify-content-center">
        <center><div id="carousel" class="carousel slide my-4" data-ride="carousel" style="width: 100vw;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators,#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators,#carousel" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators,#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://placehold.it/1500x350" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/1500x350" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/1500x350" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators,#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators,#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div></center>
    </div>
    <!-- Fim do carrossel interno -->
</section>
<!-- Início do parallax -->
<div class="parallax">
    <div class="caption">
    <?php
        $query = "SELECT * FROM comment ORDER BY avaliacao DESC LIMIT 1";
        if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            printf ("<h1><b>%s</b></h1>", $obj->desc_com);
            $_SESSION['star'] = '1';
        }
        $result->close();
        }
    ?>
    <!-- Sistema de avaliação por estrela -->
    <?php
    include "default/avaliacao.php";
    ?>
    <!-- Fim do sistema de avaliação por estrela -->
    </div>
</div>
<!-- Fim do parallax -->
    <!-- Início do Carousel -->
    <?php
    include "default/carousel.php";
    ?>
    <!-- Fim do carousel -->
<!-- Início do parallax -->
<div class="parallax">
    <div class="caption">
    <?php
        $query = "SELECT * FROM comment ORDER BY avaliacao DESC LIMIT 1,2";
        if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            printf ("<h1><b>%s</b></h1>", $obj->desc_com);
        }
        $result->close();
        }
    ?>
    <!-- Sistema de avaliação por estrela -->
    <?php
    include "default/avaliacao.php";
    ?>
    <!-- Fim do sistema de avaliação por estrela -->
    </div>
</div>
<!-- Fim do parallax -->
<!-- Contate-nos e Google Maps -->
<div class="row" style="margin-top: 3%; padding-bottom: 3%;">
    <div class="col-md-6">
        <div class="col-md-1"></div>
        <!-- Início do Google Maps -->
        <div class="col-md-10">
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 350px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.4518500831427!2d-46.97024339731655!3d-24.296783542883524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d029bcc73cf0d5%3A0x295c563cbebb095f!2sBarrica&#39;s%20Bar%20...A%20Casa%20do%20Rock!5e0!3m2!1spt-BR!2sbr!4v1595330649437!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Fim do Google Maps -->
        <div class="col-md-1"></div>
    </div>
    <div class="col-md-6" style="margin-top: 50px;">
        <div class="col-md-1"></div>
        <!-- Início do contate-nos -->
        <div class="col-md-10">
            <div class="contact" id="contact">
                <h1 style="color: #ED421C;">Contate-nos</h1>
                <input class="form-control" type="text" style="margin-bottom: 10px;" name="name" placeholder="Nome">
                <input class="form-control" type="text" style="margin-bottom: 10px;" name="email" placeholder="Email">
                <input class="form-control" type="text" style="margin-bottom: 10px;" name="coment" placeholder="Mensagem">
                <input type="submit" class="btno car" name="car" style="margin-bottom: 2%;" value="Enviar">
            </div>
        </div>
        <!-- Fim do contate-nos -->
        <div class="col-md-1"></div>
    </div>
</div>
<!-- Fim do Google Maps e contate-nos -->
<!-- Início do parallax -->
<div class="parallax">
    <div class="caption">
    <?php
        $query = "SELECT * FROM comment ORDER BY avaliacao DESC LIMIT 1,3";
        if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            printf ("<h1><b>%s</b></h1>", $obj->desc_com);
        }
        $result->close();
        }
    ?>
    <!-- Sistema de avaliação por estrela -->
    <?php
    include "default/avaliacao.php";
    ?>
    <!-- Fim do sistema de avaliação por estrela -->
    </div>
</div>
<!-- Fim do parallax -->
<!-- Início do footer -->
<?php
include "default/footer.php";
?>
<!-- Fim do footer -->
<style type="text/css">
.btno {
    border: 2px solid #f59842;
    width: 45%;
    background-color: #f59842;
    padding: 10px 14px;
    font-size: 16px;
    cursor: pointer;
    float: right;
}
#blur{
	filter: blur(1px);
	background-color: black;
}
.parallax{
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://images.unsplash.com/photo-1506968430777-bf7784a87f23?ixlib=rb-1.2.1&w=1000&q=80");
    min-height: 400px;
}
.caption {
    position: absolute;
    top: 50%;
    width: 100%;
    text-align: center;
    color: #fff;
    font-size: 25px;
    letter-spacing: 10px;
}
/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    }
}
</style>
<script type="text/javascript">
window.addEventListener("scroll", function(){
    var header = document.querySelector("#header");
    header.classList.toggle("sticky", window.scrollY > 1);
    var atx = document.querySelector(".atx");
    atx.classList.toggle("hidden", window.scrollY < 1);
    var list = document.querySelector("#row");
    list.classList.toggle("hidden", window.scrollY > 1);
});
</script>
</body>
</html>
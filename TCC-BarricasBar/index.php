<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html style="overflow-x: hidden;">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
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
<header class="navbar navbar-light flex-column flex-md-row bd-navbar sticky atx hidden" style="overflow-x: hidden; background-color: #FFA500;">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="" id="content">
            <a href="loja.php" id="tudo">Produtos</a>
            <a href="sobre.php" id="tudo">Sobre Nós</a>
            <a href="local.php" id="tudo">Local</a>
            <?php
                if (isset($_SESSION['COD_USER'])) {
                    echo "<a href='history.php' id='tudo'>Histórico de Compras</a>";
                }
                else {
                    echo "<a href='login.php' id='tudo'>Conta</a>";
                }
                if ($_SESSION['COD_USER'] == 43) { 
                    echo "<a href='dashboard.php' id='tudo'>Dashboard</a>";
                }
            ?>
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
    <?php 
        if (isset($_SESSION['COD_USER'])) {
            echo "<p><a href='history.php' style='color: white;'>Histórico de Compras</a></p>";
        }
        else {
            echo "<p><a href='login.php' style='color: white;'>Conta</a></p>";
        }
        if ($_SESSION['COD_USER'] == 43) { 
            echo "<p><a href='dashboard.php' style='color: white;'>Dashboard</a></p>";
        }
    ?>
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
</section>
<div class="container">
    <!-- Início do Carousel -->
    <?php
    include "default/carousel.php";
    ?>
    <!-- Fim do carousel -->
<!-- Contate-nos e Google Maps -->
<div class="row justify-content-center" style="margin-top: 3%; padding-bottom: 3%;">
    <hr style="width: 80%;">
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
                <form method="POST">
                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="name" placeholder="Nome">
                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="email" placeholder="Email">
                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="coment" placeholder="Mensagem">
                    <input type="submit" class="btno car" name="car" style="margin-bottom: 2%;" value="Enviar">
                </form>
            </div>
        </div>
        <!-- Fim do contate-nos -->
        <div class="col-md-1"></div>
    </div>
</div>
</div>

<!-- Fim do Google Maps e contate-nos -->
<!-- Início do footer -->
<?php include "default/footer.php"; ?>
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
<?php
if (isset($_POST['car'])) {
// Corpo do Email
$arquivo = "
<style type='text/css'>
body {
    margin:0px;
    font-size: 20px;
}
* {
    font-family: 'Lato', sans-serif;
}
#gray{
    color: #666666;
}
table{
    text-align: center;
}
</style>
<html>
<center><table style='width: 510px;'>
    <tr>
        <td colspan='6'>
            ".$_POST['name']."<br>
            ".$_POST['email']."
        </td>
        <td colspan='6'>
            ".$_POST['coment']."
        </td>
    </tr>
</table></center>
</html>";
echo $arquivo1;
//enviar
// emails para quem será enviado o formulário
    $emailenviar = "medeiros.luizhenrique@yahoo.com.br";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site";
    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: '.$nome.' <$email>';
    //$headers .= "Bcc: $EmailPadrao\r\n";
    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
    } else {
        echo "ERRO AO ENVIAR E-MAIL!";
    }
}
?>
</body>
</html>
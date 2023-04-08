<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>Loja</title>
</head>
<!-- Início dos links externos -->
<?php include "default/bootstrap.php"; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Fim dos links externos -->
<body>
<!-- Início do header -->
<header id="header" class="sticky" style="position: relative; width: 100%; background-color: #FFA500;">
<a href="index.php" class="logo">Barrica's Bar</a>
<a href="car.php" style="color: black;"><i class="fa fa-shopping-cart" style="font-size:40px;"></i></a>
</header>
<!-- Fim do header -->
<div class="content-body" >
<div class="content" style="margin: 3%; margin-top: 2%;">
<div class="row justify-content-center">
    <div class="col-lg-12" id="content">
        <!-- Divide os produtos por categoria -->
        <div class="row">
            <div class="col-md-6">
                <center><a style="cursor: pointer;" id="PA1"><i class="fa fa-beer" style="font-size:45px;color:orange;text-shadow: 0 0 5px black;"></i></a></center>
            </div>
            <div class="col-md-6">
                <center><a style="cursor: pointer;" id="PA2"><i class="fa fa-hamburger" style="font-size:45px;color:orange;text-shadow: 0 0 5px black;"></i></a></center>
            </div>
        </div>
    </div>
    <div class="col-lg-12 hidden" id="CAT1">
        <!-- Divide os produtos por categoria -->
        <div class="row">
            <div class="col-md-12">
                <center><a style="cursor: pointer;" id="arrow" style="cursor: pointer;">Limpar categoria</a></center>
            </div>
        </div>
    </div>
    <div class="col-lg-12 hidden" id="CAT2">
        <!-- Divide os produtos por categoria -->
        <div class="row">
            <div class="col-md-12">
                <center><a style="cursor: pointer;" id="arrow2" style="cursor: pointer;">Limpar categoria</a></center>
            </div>
        </div>
    </div>
    <!-- Início do carrossel -->
    <div class="col-xs-12">
        <center><div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" style="width: 100vw;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div></center>
        <!-- Fim do carrossel -->
        <div class="col-xs-12 col-md-12 col" id="cc">
            <div class="row">
            <!-- Exibe todos os produtos -->
            <?php
                $query = "SELECT * FROM shopin"; //seleciona tudo da tabela shopin
                if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    printf ("<div class='column1 col-md-4' style='padding-right: 10px;'>
                            <div class='card mb-3'>
                            <div class='row no-gutters'>
                            <div class='col-md-6'>
                            <a href='prod.php?cod=%s'><img class='card-img-top' id='img-expand' id='img' src='%s' alt='' width='200px' height='200px'></a>
                            </div>
                            <div class='col-md-6'>
                            <div class='card-body'>
                            <a href='prod.php?cod=%s' style='color: black; text-decoration: none;'><h4>%s<h4>
                            <h5>R$ %s</h5>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </a>", $obj->cd_shop, $obj->img_shop, $obj->cd_shop, $obj->nm_shop, $obj->vl_shop);
                }
                $result->close();
                }
            ?>
            </div>
        </div>
        <!---- Bebidas ---->
        <div class="col-xs-12 col-md-12 col hidden" id="RP1">
            <div class="row">
            <!-- Exibe todos os produtos -->
            <?php
                $query = "SELECT * FROM shopin WHERE id_stt = '1'"; //seleciona tudo da tabela shopin
                if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    printf ("<div class='column1 col-md-4' style='padding-right: 10px;'>
                            <div class='card mb-3'>
                            <div class='row no-gutters'>
                            <div class='col-md-6'>
                            <a href='prod.php?cod=%s'><img class='card-img-top' id='img-expand' id='img' src='%s' alt='' width='200px' height='200px'></a>
                            </div>
                            <div class='col-md-6'>
                            <div class='card-body'>
                            <a href='prod.php?cod=%s' style='color: black; text-decoration: none;'><h4>%s<h4>
                            <h5>R$ %s</h5>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </a>", $obj->cd_shop, $obj->img_shop, $obj->cd_shop, $obj->nm_shop, $obj->vl_shop);
                }
                $result->close();
                }
            ?>
            </div>
        </div>
        <!---- Comidas ---->
        <div class="col-xs-12 col-md-12 col hidden" id="RP2">
            <div class="row">
            <!-- Exibe todos os produtos -->
            <?php
                $query = "SELECT * FROM shopin  WHERE id_stt = '2'"; //seleciona tudo da tabela shopin
                if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    printf ("<div class='column1 col-md-4' style='padding-right: 10px;'>
                            <div class='card mb-3'>
                            <div class='row no-gutters'>
                            <div class='col-md-6'>
                            <a href='prod.php?cod=%s'><img class='card-img-top' id='img-expand' id='img' src='%s' alt='' width='200px' height='200px'></a>
                            </div>
                            <div class='col-md-6'>
                            <div class='card-body'>
                            <a href='prod.php?cod=%s' style='color: black; text-decoration: none;'><h4>%s<h4>
                            <h5>R$ %s</h5>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </a>", $obj->cd_shop, $obj->img_shop, $obj->cd_shop, $obj->nm_shop, $obj->vl_shop);
                }
                $result->close();
                }
            ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Início do footer -->
<?php
include "default/footer.php";
?>
<!-- Fim do footer -->
<style type="text/css">
.col {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
    background-image: url("https://i.pinimg.com/originals/df/80/8f/df808f6bfc95b04ecfa02502c905ca7e.jpg");
}
body {
    background-image: url("https://i.pinimg.com/originals/df/80/8f/df808f6bfc95b04ecfa02502c905ca7e.jpg");
}
html {
    width: 100%;
}
</style>
<script type="text/javascript">
//muda o formato das divs dependendo do tamanho da tela
var x = window.matchMedia("(max-width: 1799px)");
myFunction(x);
x.addListener(myFunction);
function myFunction(x) {
    if (x.matches) {
        $(".column1").addClass("col-md-4");    
        $(".column1").removeClass("col-md-3");
    } else {
    }
}
var y = window.matchMedia("(min-width: 1800px)");
ourFunction(y);
y.addListener(ourFunction);
function ourFunction(y) {
    if (y.matches) {
        $(".column1").addClass("col-md-3");    
        $(".column1").removeClass("col-md-4");
    } else {
    }
}
$(document).ready(function() {
    $("#arrow").click(function(){
        $("#RP1").addClass("hidden");
        $("#CAT1").addClass("hidden"); 
        $("#content").removeClass("hidden");
        $("#cc").removeClass("hidden");
    });
})
$(document).ready(function() {
    $("#PA1").click(function(){
        $("#RP1").removeClass("hidden");
        $("#CAT1").removeClass("hidden");
        $("#content").addClass("hidden");
        $("#cc").addClass("hidden");
    });
})
$(document).ready(function() {
    $("#arrow2").click(function(){
        $("#RP2").addClass("hidden");    
        $("#CAT2").addClass("hidden");
        $("#content").removeClass("hidden");
        $("#cc").removeClass("hidden");
    });
})
$(document).ready(function() {
    $("#PA2").click(function(){
        $("#RP2").removeClass("hidden");
        $("#CAT2").removeClass("hidden");
        $("#content").addClass("hidden");
        $("#cc").addClass("hidden");
    });
})
</script>
</body>
</html>
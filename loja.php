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
<?php
include "default/bootstrap.php";
?>
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Fim dos links externos -->
<body>
<!-- Início do header -->
<header id="header" class="sticky" style="position: relative;">
<a href="index.php" class="logo">Barrica's Bar</a>
<a href="car.php" style="color: black;">Carrinho</a>
</header>
<!-- Fim do header -->
<div class="content-body" >
<div class="content" style="margin: 3%; margin-top: 2%;">
<div class="row justify-content-center">
    <div class="col-lg-12">
        <!-- Divide os produtos por categoria -->
        <div class="row">
            <div class="col-md-6">
                <center><a>Bebidas</a></center>
            </div>
            <div class="col-md-6">
                <center>Comida</center>
            </div>
        </div>
    </div>
    <!-- Início do carrossel -->
    <div class="col-xs-12 justify-content-center">
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
        <div class="col-xs-12 col-md-11 col">
            <div class="row">
            <!-- Exibe todos os produtos -->
            <?php
                $query = "SELECT * FROM shop"; //seleciona tudo da tabela shop
                if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    printf ("<div class='column1 col-md-4' style='padding-right: 10px;'>
                            <div class='card mb-3'>
                            <div class='row no-gutters'>
                            <div class='col-md-6'>
							<a href='prod.php?cod=%s'><img class='card-img-top' src='%s' alt=''></a>
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
    float: right;
    margin: 20px;
    padding-bottom: 100px;
    margin-bottom: -100px;
}
.card-img-top{
    height: 230px;
    width: 100%;
    object-fit: cover;
    object-position: center;
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
</script>
</body>
</html>
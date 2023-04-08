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
<!-- Início dos links externos -->
<?php
include "default/bootstrap.php";
?>
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/car.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Fim dos links externos -->
</head>
<body>
<?php
if (isset($_POST['car'])){
    $prod = $_GET['cod'];
    $user = $_SESSION['COD_USER'];
    if ($result = $mysqli->query("SELECT * FROM cart WHERE prod = '".$_GET['cod']."' AND cart_user = '".$_SESSION['COD_USER']."'")) {
        /* determine number of rows result set */
        $row_cnt = $result->num_rows;
        if ($row_cnt == 0) {
            $query = "INSERT INTO cart (cd_cart, prod, cart_user, qnt_cart) VALUES (NULL,".$prod.",".$user.",'1')";
            if ($result = $mysqli->query($query)){
            }
        }
        else{
            $query = "UPDATE cart SET qnt_cart = qnt_cart + 1 WHERE prod = '".$_GET['cod']."'"; //verifica se os dados do login conferem
            if ($result = $mysqli->query($query)){
            }
        }
    }
}
?>
<!-- Início do header -->
<header id="header" class="sticky" style="position: relative; width: 100%; background-color: #FFA500;">
<a href="index.php" class="logo">Barrica's Bar</a>
<a href="car.php" style="color: black;"><i class="fa fa-shopping-cart" style="font-size:40px;"></i></a>
</header>
<!-- Fim do header -->
<div class="container" style="margin-top: 2%;">
<?php
    //exibe o nome do produto
    $query = "SELECT * FROM shopin WHERE cd_shop = '".$_GET['cod']."'";
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
        printf ("<h1><b>%s</b></h1>", $obj->nm_shop);
    }
    }
?>
<div class="row">
    <div class="col-md-4">
    <?php
        //exibe a imagem do produto
        $query = "SELECT * FROM shopin WHERE cd_shop = '".$_GET['cod']."'";
        if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            printf ("<img id='img' src='%s' width='228px' height='328px'>", $obj->img_shop);
        }
        }
    ?>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-7">
        <div class="row">
        <?php
            //exibe a descrição do produto
            $query = "SELECT * FROM shopin WHERE cd_shop = '".$_GET['cod']."'";
            if ($result = $mysqli->query($query)) {
            while ($obj = $result->fetch_object()) {
                printf ("<h4 style='margin-bottom: 250px;'><b>Descrição do Produto:</b><br> %s</h4>", $obj->desc_shop);
            }
            }
        ?>
        </div>
        <form method="POST">
            <div class="row" style="float: bottom;">
                <div class="col-md-4">
                <?php
                    //exibe o preço do produto
                    $query = "SELECT * FROM shopin WHERE cd_shop = '".$_GET['cod']."'";
                    if ($result = $mysqli->query($query)) {
                    while ($obj = $result->fetch_object()) {
                        printf ("<h3><b>R$ %s</b><h3>", $obj->vl_shop);
                    }
                    }
                ?>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <input type="submit" class="btno car" name="car" style="margin-bottom: 2%;" value="Adicionar ao Carrinho">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>
<!-- Início do Carousel -->
<?php
include "default/carousel.php";
?>
<!-- Fim do carousel -->
</div>
<!-- Início do footer -->
<?php
include "default/footer.php";
?>
<!-- Fim do footer -->
<style>
#img{
    height: 230px;
    width: 100%;
    object-fit: cover;
    object-position: center;
}
hr{
    background: lightgray; 
    width: 100%; 
    float: right;'
}
.btno {
    border: 2px solid black;
    width: 80%;
    color: black;
    padding: 14px 14px;
    font-size: 16px;
    cursor: pointer;
}
.car:hover {
    background: #ff9800;
    transition: 1s;
}
.now {
    background-color: black;
    color: white;
}
.now:hover {
    color: #ff9800;
    transition: 0.5s;
}
textarea {
    width: 100%;
}
img{
    max-width: 70%;
}
</style>
</body>
</html>
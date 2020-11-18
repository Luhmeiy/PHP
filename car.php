<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
if (empty($_SESSION['COD_USER'])) { //se a sessão estiver vazia, define a sessão como 0, assim previnindo erros
    $_SESSION['COD_USER'] = '0';
}
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>Carrinho</title>
<!-- Início dos links externos -->
<?php include "default/bootstrap.php"; ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<link rel="stylesheet" type="text/css" href="CSS/car.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<link rel="stylesheet" type="text/css" href="CSS/car2.css">
<script src="JS/car2.js"></script>
<!-- Fim dos links externos -->
</head>
<body>
<!-- Início do header -->
<header id="header" class="sticky" style="position: relative; background-color: #FFA500;">
<a href="index.php" class="logo">Barrica's Bar</a>
</header>
<!-- Fim do header -->
<?php
    if (isset($_POST['atualizar'])){
        $id = $_POST['id'];
        $qnt = $_POST['qnt'];
        foreach ($id as $v => $code) {
            if ($result = $mysqli->query("SELECT * FROM cart WHERE cart_user = '".$_SESSION['COD_USER']."'")) {
                $row_cnt = $result->num_rows;
                if ($row_cnt == 0) {
                    echo "CCCCCCCCCCCCC"; 
                }
                else {
                    $query = "UPDATE cart SET qnt_cart = '".$qnt[$v]."' WHERE prod = '".$code."' AND cart_user = '".$_SESSION['COD_USER']."'"; //verifica se os dados do login conferem
                    if ($result = $mysqli->query($query)){
                    }
                }
            }
            else {
                echo "BBBBBBBBBBBBBBBBB".$_POST['qnt'];
            }
        }
    }
?>
<?php
if (isset($_POST['checkout'])) { //se o POST for preenchido, redireciona para a página de checkout
    header("location:checkout.php");
}
?>
<?php
if (isset($_POST['remove'])){ //se o POST for preenchido, remove do carrinho o item desejado
    $query = "DELETE FROM cart WHERE cd_cart = '".$_POST['remove']."'";
if ($conn->query($query) === TRUE) {
} 
}
else{
    echo $conn->error;
}
?>
<hr>
<br>
<br>
<h1 style="margin-left: 1%;">Carrinho de Compras</h1>
<br>
<!-- Início do form do carrinho -->
<form method="POST">
<div style="margin-right: 1%; margin-left: 1%;">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-3"><b>Produto</b></div>
            <div class="col-md-2"><b>Preço</b></div>
            <div class="col-md-2"><b>Quantidade</b></div>
            <div class="col-md-1"></div>
            <div class="col-md-2"><b>Total</b></div>
        </div>
    </div>
    <div class="col-md-4"></div> <!-- div vazia para que o melhor alinhamento do site -->
</div>
<div class='row justify-content-center'>
    <div class='col-md-8'>
    <!-- Início do php que exibe os itens no carrinho -->
    <?php
        $query = "SELECT *,SUM(qnt_cart)*vl_shop AS vl_prodall  FROM cart, shopin WHERE prod = cd_shop AND cart_user = '".$_SESSION['COD_USER']."' GROUP BY prod"; //exibe os itens se o código do produto na tabela carrinho for o mesmo código que na tabela shop e se o código do usuário na sessão for o mesmo que o código na tabela carrinho
        if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            $a[] = $obj->qnt_cart;
            printf ("<div class='row justify-content-center'>
                    <div class='col-md-2'>
                      <a href='prod.php?cod=%s'><img src='%s' id='img' style='width: 62px;'></a>
                    </div>
                    <div class='col-md-3'>
                      <div class='product-title'><a href='prod.php?cod=%s'><h5><b>%s</b></h5></a></div>
                    </div>
                    <div class='col-md-2'>R$ %s</div>
                    <div class='product-quantity col-md-2' id='qtn'>
                      <input class='form-control' type='number' value='%s' name='qnt[]'>
                      <input type='hidden' value='%s' name='id[]'>
                    </div>
                    <div class='col-md-1'>
                      <td class='col-sm-2 col-md-1' class='product-removal'>
                        <button type='submit' class='btn btn-danger' id='danger' name='remove' value='%s'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' width='16' height='16'><path fill-rule='evenodd' d='M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z'></path></svg>
                        </button>
                      </td>
                    </div>
                    <div class='col-md-2'>R$ %s</div>
                    </div><hr>", $obj->cd_shop, $obj->img_shop, $obj->cd_shop, $obj->nm_shop, $obj->vl_shop, $obj->qnt_cart, $obj->cd_shop, $obj->cd_cart, number_format($obj->vl_prodall, 2)); //cada objeto é inserido em um dos %s presentes no printf

        }
        $result->close();
        }
    ?>
    <input type="submit" id="at" name="atualizar" class="btno btn-success checkout" value="Atualizar Carrinho">
    <!-- Fim do php que exibe os itens no carrinho -->
    </div>
    <div class="col-md-4">
        <div class="totals">
            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal">
                <?php
                    $query = "SELECT SUM(qnt_cart)*vl_shop AS comprados FROM cart, shopin WHERE cd_shop = prod AND cart_user = '".$_SESSION['COD_USER']."' GROUP BY prod";
                    if ($result = $mysqli->query($query)) {
                        while ($obj = $result->fetch_object()) {
                            $resultado += $obj->comprados;
                        }
                        $_SESSION['soma'] = $resultado;
                        echo number_format($resultado, 2);
                        $result->close();
                    }
                ?>
                </div>
            </div>
            <div class="totals-item">
                <label>Taxa (5%)</label>
                <div class="totals-value" id="cart-tax">
                <?php
                    $query = "SELECT * FROM cart, shopin WHERE cart_user = '".$_SESSION['COD_USER']."'";
                    if ($result = $mysqli->query($query)) {
                            $_SESSION['tax'] = $_SESSION['soma'] * 0.05; //multiplica a sessão soma e adiciona na sessão tax
                            echo number_format("".$_SESSION['tax']."", 2); //exibe a sessão soma
                    }
                ?>
                </div>
            </div>
            <div class="totals-item">
                <label>Frete</label>
                <div class="totals-value" id="cart-shipping">
                <?php
                    if($_SESSION['soma'] != 0)
                    {
                    echo "5.00"; //exibe o que seria o valor do frete
                    }
                ?>
                </div>
            </div>
            <div class="totals-item ">
                <label>Total</label>
                <div class="totals-value" id="cart-total">
                <?php
                    $_SESSION['total'] = $_SESSION['tax'] + $_SESSION['soma'] + 5; //adiciona a sessão tax somana na sessão soma na sessão total
                    echo number_format("".$_SESSION['total']."", 2); //exibe a sessão total
                ?>
                </div>
            </div>
        </div> 
        <input type="submit" id="checkout" name="checkout" class="btno btn-success checkout" value="Finalizar Compra">
    </div>
</div>
</div>
</form>
<!-- Início do carousel -->
<?php
include "default/carousel.php";
?>
<!-- Fim do carousel -->
<!-- Início do footer -->
<?php
include "default/footer.php";
?>
<!-- Fim do footer -->
<style type="text/css">
#at{
    width: 200px;
    float: right;
}
svg {
  fill: currentColor;
}
#qtn{
  width: 80%;
}
#danger{
  margin-left: -15%;
}
</style>
</body>
</html>
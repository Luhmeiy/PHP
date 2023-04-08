<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Barrica's Bar</title>
<!-- Início dos links externos -->
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Início dos links externos -->
</head>
<body>
<!-- Início do header -->
<?php include 'default/header.php'; ?>
<!-- Fim do header -->
<div class="container" id="container">
<center><h1>Histórico de Compras</h1>
<div class="row card-deck">
<?php
    $query = "SELECT *,SUM(qnt_compra_com)*vl_shop AS comprados FROM comprados, shopin WHERE id_prod_com = cd_shop AND id_user_com = ".$_SESSION['COD_USER']." GROUP BY cod_compra";
    if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            $total = number_format($obj->comprados,2);
            echo "<div class='card col-md-4'>
                  <div class='card-body'>
                  <h5 class='card-title'>Compra do dia ".$obj->data."</h5>
                  <p class='card-text'>Valor total: ".$total."</p>
                  <a href='http://tcc-barricas.000webhostapp.com/history-detail.php?cod=".$obj->cod_compra."' class='card-link'>Ver detalhes</a>
                  </div>
                  </div>";
        }
    }
?>
</div>
</center>
</div>
<!-- Início do footer -->
<?php include "default/footer.php"; ?>
<!-- Fim do footer -->
<style>
#container {
    padding-top: 15px;
    padding-bottom: 15px;
}
</style>
</body>
</html>
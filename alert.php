<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html style="overflow-y: hidden;">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Dashboard</title>
<!-- Início dos links externos -->
<?php
    include "default/bootstrap.php";
?>
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<!-- Fim dos links externos -->
</head>
<body>
<!-- Início do corpo do site -->
<div class="container">
<div class="row">
    <div class="col-md-12" style="overflow-y: auto;">
    <?php
    if ($_GET['al'] == 1){//a página só será exibida se quem a estiver utilizando for o admin
        echo "<center><h1> Cadastro concluído com sucesso! </h1><br> Retorne para o <a href='index.php'>site</a></center>";
        echo "<meta http-equiv='refresh' content='5; URL=index.php'>";
    }
    else if ($_GET['al'] == 2){//a página só será exibida se quem a estiver utilizando for o admin
        echo "<center><h1> Login efetuado com sucesso! </h1><br> Retorne para o <a href='index.php'>site</a></center>";
        echo "<meta http-equiv='refresh' content='5; URL=index.php'>";
    }
    else if ($_GET['al'] == 3){//a página só será exibida se quem a estiver utilizando for o admin
        echo "<center><h1> Compra concluída com sucesso! </h1><br> Retorne para o <a href='index.php'>site</a></center>";
        echo "<meta http-equiv='refresh' content='5; URL=index.php'>";
    }
    else{
        echo "<center><h1> Você não deveria estar aqui! </h1><br> Retorne para o <a href='index.php'>site</a></center>";
    }
    ?>
</div>
</div>
</div>
<style type="text/css">
.col-md-10{
    background-color: lightgray;
    padding-top: 5%;
    padding-bottom: 5%;
}
</style>
</body>
</html>
<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
if ($_SESSION['COD_USER'] == 43){//verifica se é o admin que está logado
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
<!-- Início do header -->
<?php
include 'default/header.php';
?>
<!-- Fim do header -->
<div class="row">
<div class="col-md-8">
    <div class="row">
    <div class="col-md-4">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="background-color: black; color: white;">
            <center><h3>Unidades Vendidas</h3></center>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <?php
            $query = "SELECT SUM(qnt_compra_com) AS comprados FROM comprados";
            if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    printf ("<center><h1>%s</h1></center>", $obj->comprados);
                }
                $result->close();
            }
        ?>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="background-color: black; color: white;">
            <center><h3>Total Bruto</h3></center>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <?php
            $query = "SELECT SUM(qnt_compra_com)*vl_shop AS comprados FROM comprados, shopin WHERE cd_shop = id_prod_com GROUP BY id_prod_com";
            if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    $resultado += $obj->comprados;
                }
                echo "<center><h1>R$ ".$resultado."</h1></center>";
                $result->close();
            }
        ?>
        </div>
        <div class="col-md-1"></div>
    </div>   
    </div>
    <div class="col-md-4">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="background-color: black; color: white;">
            <center><h3>Produto Mais Vendido</h3></center>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <?php
            $query = "SELECT *, SUM(qnt_compra_com) AS comprados FROM comprados, shopin WHERE cd_shop = id_prod_com GROUP BY id_prod_com DESC LIMIT 1";
            if ($result = $mysqli->query($query)) {
                while ($obj = $result->fetch_object()) {
                    printf ("<center><h1>%s</h1></center>", $obj->nm_shop);
                }
                $result->close();
            }
        ?>
        </div>
        <div class="col-md-1"></div>
    </div> 
    </div>
    </div>
    <div class="row">
    <?php  
        $connect = mysqli_connect("localhost", "id14991490_root", "PN0/}bRmeQwG+\bq", "id14991490_tcc"); 
        $query = "SELECT *, SUM(qnt_compra_com) as number FROM comprados, shopin WHERE cd_shop = id_prod_com GROUP BY id_prod_com ORDER BY qnt_compra_com DESC LIMIT 10";  
        $result = mysqli_query($connect, $query);  
    ?>   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript">  
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);  
        function drawChart() {  
            var data = google.visualization.arrayToDataTable([  
                ['nm_shop', 'Number'],  
                <?php  
                    while($row = mysqli_fetch_array($result)) {  
                        echo "['".$row["nm_shop"]."', ".$row["number"]."],";  
                    }  
                ?>  
            ]);  
            var options = {  
                title: 'Porcentagem de Produtos Vendidos',  
                //is3D:true,  
                pieHole: 0.4  
            };  
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
            chart.draw(data, options);  
        }  
    </script>   
    <div style="width:810px;">  
        <div id="piechart" style="width: 810px; height: 500px;"></div>  
    </div>  
    </div>
</div>
<div class="col-md-4" id="scroll" style="padding-right: 50px; height: 665px;">
    <?php
        $query = "SELECT * FROM comprados, shopin WHERE id_prod_com = cd_shop";
        if ($result = $mysqli->query($query)) {
            while ($obj = $result->fetch_object()) {
                printf ("<div class='row'>
                        <div class='col-md-6'>
      			        Código da compra: %s<br> 
      			        Nome: %s<br> 
      			        Telefone: %s<br> 
      			        Endereço: %s, %s<br> 
      			        Comentário adicional: %s
      			        </div>
      			        <div class='col-md-6'>
      			        Código do produto: %s<br>
      			        Nome do produto: %s<br>
      			        Quantidade: %s
      		            </div></div>
      		            <hr>", $obj->cd_compra, $obj->nome, $obj->telefone, $obj->endereço, $obj->endereco_num, $obj->comment, $obj->id_prod_com, $obj->nm_shop, $obj->qnt_compra_com);
            }
            $result->close();
        }
    }
    else{
        echo "<center><h1> Você não deveria estar aqui! </h1><br> Retorne para o <a href='index.php'>site</a></center>";
    }
    ?>
</div>
</div>
<style type="text/css">
div#scroll { 
    margin:4px, 4px; 
    padding:4px;  
    width: 500px; 
    height: 61.5vh; 
    overflow-x: hidden; 
    overflow-x: auto;
    overflow-x: hidden; 
    overflow-x: none;
    text-align:justify; 
}
.col-md-10{
    background-color: lightgray;
    padding-top: 5%;
    padding-bottom: 5%;
}
hr{
	width: 100%;
	height: 1px;
	background-color: lightgray;
}
</style>
</body>
</html>
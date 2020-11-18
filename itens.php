<!DOCTYPE html>
<?php 
    session_start();
    include "default/conect2.php"; 
?>
<html>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<meta charset="utf-8">
<head>
	<title>RPG - Cyberpunk</title>
<?php include "default/bootstrap.php"; ?>
</head>
<body>
<?php include "default/navbar.php"; ?>
<div class="container">
<?php
    $rp = array("1", "2", "3", "4", "5", "6", "7", "8");
    $nm = array("Rifle de Assalto", "Rifle de Precisão", "Metralhadora", "Escopeta", "Pistolas", "Armas Brancas", "Bombas", "Arremessáveis");
    foreach ($rp as $index => $code) {
        $query = "SELECT * FROM itens WHERE subcat_gun = ".$code."";
        echo "<div class='row'>
              <div class='col-md-12'><h1>".$nm[$index]."</h1></div>";
        if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
    	        printf ("<div class='col-lg-3 col-sm-4'>
                         <a href='item.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                         <h4 class='card-title'>%s</h4>
		                 <p class='card-text'>".$nm[$index]."</p>
                         </div>", $obj->cd_gun, $obj->img_gun, $obj->nm_gun);
    	    }
        }
        echo "</div>";
    }
?>
<?php
    $ab = array("1", "2", "3", "4");
    $name = array("Medicina", "Tecnologia", "Segurança", "Sabotador");
    foreach($ab as $index => $code) {
        $query = "SELECT * FROM abilities WHERE cat_ab = ".$code."";
        echo "<div class='row'>
              <div class='col-md-12'><h1>".$name[$index]."</h1></div>";
        if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
    	        printf ("<div class='col-lg-3 col-sm-4'>
                         <a href='item.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                         <h4 class='card-title'>%s</h4>
		                 <p class='card-text'>".$name[$index]."</p>
                         </div>", $obj->cd_ab, $obj->img_ab, $obj->nm_ab);
    	    }
        }
        echo "</div>";
    }
?>
</div>
</div>
<?php include "default/footer.php"; ?>
<style>
.card-img-top {
    height: 145px;
    object-fit: cover;
}
</style>
</body>
</html>
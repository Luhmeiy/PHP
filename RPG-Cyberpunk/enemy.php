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
<div class="row">
<div class='col-md-6'>
<?php
    $query = "SELECT * FROM enemy WHERE cd_enemy = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	    printf ("<a href='role.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                    <h4 class='card-title'>%s</h4>
		            <p class='card-text'>Categoria: <b style='float: right;'>%s</b></p>
		            <p class='card-text'>%s</p>", $obj->cd_enemy, $obj->img_enemy, $obj->nm_enemy, $obj->cat_enemy, $obj->txt_enemy);
        }
    }
?>
</div>
<div class='col-md-6'>
<?php
    $query = "SELECT * FROM enemy WHERE cd_enemy = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	       printf ("<p>%s</p>", $obj->txt_enemy);
        }
    }
?>
</div>
</div>
</div>
<?php include "default/footer.php"; ?>
<style>
.card-img-top {
    height: 145px;
    object-fit: cover;
}
#input {
    border-style: solid;
    border-width: 1.5px;
    border-radius: 5px;
    border-color: lightgreen;
}
</style>
</body>
</html>
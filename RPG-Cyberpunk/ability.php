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
    $query = "SELECT * FROM abilities WHERE cd_ab = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	    printf ("<a href='role.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                    <h4 class='card-title'>%s</h4>
		            <p class='card-text'>Categoria: <b style='float: right;'>%s</b></p>", $obj->cd_ab, $obj->img_ab, $obj->nm_ab, $obj->cat_ab);
        }
    }
?>
</div>
<div class='col-md-6'>
<form method="POST" style="width: 100%;">
<?php
    $query = "SELECT * FROM abilities WHERE cd_ab = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	   printf ("<p>%s</p>", $obj->desc_ab);
        }
    }
?>
</form>
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
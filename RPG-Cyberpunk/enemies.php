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
<?php
    $query = "SELECT * FROM enemy";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	   printf ("<div class='col-lg-3 col-sm-4'>
                    <a href='enemy.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                    <h4 class='card-title'>%s</h4>
		               <p class='card-text'>%s</p>
                    </div>", $obj->cd_enemy, $obj->img_enemy, $obj->nm_enemy, $obj->cat_enemy);
    	}
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
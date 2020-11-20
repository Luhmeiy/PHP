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
<?php
    if (isset($_POST['pistol'])) {
        $rand = array($_POST['pistol']);
        $cat = array($_POST['cat3']);
        foreach ($rand as $index => $code) {
        $query = "SELECT * FROM itens, shop WHERE cd_gun = id_cat_gun AND cat_gun = ".$cat[$index]." ORDER BY RAND() LIMIT ".$code."";
        if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
    	       $query = "INSERT INTO shop (cd_shop, id_cat_shop, price_shop) VALUES (NULL, ".$obj->cd_shop.", ".$obj->price.") WHERE cd_gun = id_cat_gun AND cat_gun = ".$cat[$index]." ORDER BY RAND() LIMIT ".$code."";
            }
        }
        }
    }
?>
<div class="container">
<form method="POST">
    <div class="row">
        <div class="col-md-12">
            <select name="pistol" >
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <input type="hidden" value="3" name="cat3">
        </div>
        
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
</div>
<?php include "default/footer.php"; ?>
<style>
.bg-img {
    object-fit: cover;
    filter: brightness(0.30) blur(2px);
    width: 100%;
}
.module {
    background: 
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    background-size: cover;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 3px;
    margin-bottom: 3px;
    position: relative;
    float: left;
}
.mid h2 {
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    color: orange;
    text-transform: uppercase;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 1.25rem;
    transform: translate(-50%, -50%);
}
</style>
</body>
</html>
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
<div class="row">
    <div class="col-md-8">
        <div class="col-md-12">
            <div id="role" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#role" data-slide-to="0"></li>
                    <li data-target="#role" data-slide-to="1"></li>
                    <li data-target="#role" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                <?php
                    $query = "SELECT * FROM roles WHERE cd_role = 1";
                    if ($result = $mysqli->query($query)){
                            while ($obj = $result->fetch_object()){
    	                        printf ("<div class='carousel-item active'>
                                         <a href='role.php?cod=%s'><img src='%s' alt='Los Angeles'></a>
                                         <div class='carousel-caption'>
                                         <h3>%s</h3>
                                         </div>   
                                         </div>", $obj->cd_role, $obj->img_role, $obj->nm_role);
    	                    }
                        }
                    $rp = array("2", "3");
                    foreach ($rp as $code) {
                        $query = "SELECT * FROM roles WHERE cd_role = ".$code."";
                        if ($result = $mysqli->query($query)){
                            while ($obj = $result->fetch_object()){
    	                        printf ("<div class='carousel-item'>
                                         <a href='role.php?cod=%s'><img src='%s' alt='Los Angeles' width='1100' height='500'></a>
                                         <div class='carousel-caption'>
                                         <h3>%s</h3>
                                         </div>   
                                         </div>", $obj->cd_role, $obj->img_role, $obj->nm_role);
    	                    }
                        }
                    }
                ?>
                </div>
                <a class="carousel-control-prev" href="#role" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#role" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <div id="enemy" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#enemy" data-slide-to="0"></li>
                    <li data-target="#enemy" data-slide-to="1"></li>
                    <li data-target="#enemy" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                <?php
                    $query = "SELECT * FROM enemy WHERE cd_enemy = 1";
                    if ($result = $mysqli->query($query)){
                            while ($obj = $result->fetch_object()){
    	                        printf ("<div class='carousel-item active'>
                                         <a href='enemy.php?cod=%s'><img src='%s' alt='Los Angeles'></a>
                                         <div class='carousel-caption'>
                                         <h3>%s</h3>
                                         </div>   
                                         </div>", $obj->cd_enemy, $obj->img_enemy, $obj->nm_enemy);
    	                    }
                        }
                    $rp = array("2", "3");
                    foreach ($rp as $code) {
                        $query = "SELECT * FROM enemy WHERE cd_enemy = ".$code."";
                        if ($result = $mysqli->query($query)){
                            while ($obj = $result->fetch_object()){
    	                        printf ("<div class='carousel-item'>
                                         <a href='enemy.php?cod=%s'><img src='%s' alt='Los Angeles' width='1100' height='500'></a>
                                         <div class='carousel-caption'>
                                         <h3>%s</h3>
                                         </div>   
                                         </div>", $obj->cd_enemy, $obj->img_enemy, $obj->nm_enemy);
    	                    }
                        }
                    }
                ?>
                </div>
                <a class="carousel-control-prev" href="#enemy" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#enemy" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-md-4">
                <div class='col-md-12'>
                	<a href='itens.php'><div class='module mid'>
                        <p><h2>Conheça alguns itens!</h2></p>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class='col-md-12'>
            	    <a href='local.php'><div class='module mid'>
                        <p><h2>Explore o universo!</h2></p>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class='col-md-12'>
            	    <a href='about.php'><div class='module mid'>
                        <p><h2>Descubra o sistema!</h2></p>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        
    </div>
</div>
<?php include "default/footer.php"; ?>
<style>
#role, #enemy {
   width: 100%;
   height: 350px;
   margin-top: 5px;
   margin-bottom: 5px;
}
.carousel-inner img, .active img {
    object-fit: cover;
    height: 350px;
    width: 100%;
}
.module {
    background-color: #221D3A;
    margin-left: 3px;
    margin-right: 3px;
    margin-bottom: 3px;
    height: 150px;
}
.mid h2 {
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    color: #DE3C4B;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 1.25rem;
    transform: translate(-50%, -50%);
}
</style>
</body>
</html>
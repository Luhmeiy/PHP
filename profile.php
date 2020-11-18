<!DOCTYPE html>
<?php 
    session_start();
    include "default/conect2.php";
    if (isset($_SESSION['COD_USER'])) {
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
        <div class="col-md-6">
            <div class="col-md-12">
            <?php
                $query = "SELECT * FROM user WHERE cd_user = ".$_SESSION['COD_USER']."";
                if ($result = $mysqli->query($query)){
                    while ($obj = $result->fetch_object()){
                	    printf ("<img class='card-img-top' src='%s' alt='Card image cap'>
                                <center><h4 class='card-title'>%s</h4></center>
	            	            <ul>
	            	            <li class='card-text'>Email: <b style='float: right;'>%s</b></li>
	            	            </ul>
	            	            <center><a href='https://legendsslayer.000webhostapp.com/rpg-cyberpunk/change-password.php' class='card-text'>Alterar Senha</a></center>", $obj->img_user, $obj->nm_user, $obj->email);
                    }
                }
            ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
            <?php
                $query = "SELECT * FROM roles WHERE cd_role = 1";
                if ($result = $mysqli->query($query)){
                    while ($obj = $result->fetch_object()){
                	    printf ("<div class='module mid'>
                                 <a href='role.php?cod=%s'><img src='%s' class='bg-img'></a>
                                 <p><h2>%s</h2></p>
                                 </div>", $obj->cd_role, $obj->img_role, $obj->nm_role);
                    }
                }
            ?>
            </div>
            <div class="col-md-12">
            <?php
                $query = "SELECT * FROM roles WHERE cd_role = 1";
                if ($result = $mysqli->query($query)){
                    while ($obj = $result->fetch_object()){
                	    printf ("<div class='module mid'>
                                 <a href='role.php?cod=%s'><img src='%s' class='bg-img'></a>
                                 <p><h2>%s</h2></p>
                                 </div>", $obj->cd_role, $obj->img_role, $obj->nm_role);
                    }
                }
            ?>
            </div>
        </div>
    </div>
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
<?php 
    }
    else {
        echo "<center>Nenhuma conta conectada</center>";
    }
?>
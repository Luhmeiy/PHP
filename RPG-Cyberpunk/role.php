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
<form action="create-sheet.php">
<div class="container">
<div class="row">
<div class='col-md-6'>
<?php
    $query = "SELECT * FROM roles WHERE cd_role = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	    printf ("<a href='role.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                    <h4 class='card-title'>%s</h4>
		            <p class='card-text'>Categoria: <b style='float: right;'>%s</b></p>
		            <input type='hidden' value='%s' name='hidden'>
		            <p class='card-text'>%s</p>", $obj->cd_role, $obj->img_role, $obj->nm_role, $obj->cat_role, $obj->cd_role, $obj->txt_role);
        }
    }
?>
</div>
<div class='col-md-6'>
<div class='row'>
<?php
    $query = "SELECT * FROM stts WHERE id_stt_user = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	   printf ("<div class='col-md-12'>%s 
    	            <b style='float: right;'>%s</b>
    	            </div>", $obj->nm_stt, $obj->vl_stt);
        }
    }
?>
</div>
<div class="row">
<?php
    $rp = array("2", "3");
    foreach ($rp as $v) {
        $query = "SELECT * FROM roles, itens WHERE cd_role = ".$_GET['cod']." AND cat_gun = ".$v."";
        echo "<div class='col-md-6'>
              <div class='col-md-12' id='input'>
              <label class='radio-inline'>
              <input type='radio' name='item' value='$v' id='$v' style='margin-left: 5px;'> Opção ".$v."
              <ul>";
        if ($result = $mysqli->query($query)){
            while ($obj = $result->fetch_object()){
    	        printf ("<li><p>%s</p></li>", $obj->nm_gun);
            }
        }
        echo "</ul>
              </label>
              </div>
              </div>";
    }
?>
</div>
<?php
if (isset($_SESSION['COD_USER'])){
    echo "<button class='btn btn-secondary' type='submit'>Criar Ficha</button>";
}
else {
    echo "<a role='button' class='btn btn-secondary popover-test' data-content='Você precisa estar logado' data-placement='top'  data-toggle='popover'>Criar Ficha</a>";
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
    margin-bottom: 5px;
    border-style: solid;
    border-width: 1.5px;
    border-radius: 5px;
    border-color: lightgreen;
}
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>
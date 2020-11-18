<?php
session_start();
    include "bootstrap.php";
    include "conect3.php";
?>
<div class="row justify-content-center" id="content">
<a onclick="ourFunction()">Replace document</a>
<?php
    $query = "SELECT * FROM itens WHERE subcat_gun = ".$_GET['cod']."";
    if ($result = $mysqli->query($query)){
        while ($obj = $result->fetch_object()){
    	   printf ("<div class='col-lg-3 col-sm-4'>
                     <a href='item.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                     <h4 class='card-title'>%s</h4>
                     </div>", $obj->cd_gun, $obj->img_gun, $obj->nm_gun);
    	}
    }
?>
</div>
<script>
    function ourFunction(){
        window.location = "https://legendsslayer.000webhostapp.com/rpg-cyberpunk/sheet/block.php";
    }
</script>
<div class="row">
    <div class='col-md-6'>
        <div class='col-md-12' id='input'>
        <?php
            $query = "SELECT * FROM roles WHERE cd_role = 1";
            if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
    	            printf ("<a href='role.php?cod=%s'><img class='card-img-top' src='%s' alt='Card image cap'></a>
                             <h4 class='card-title'>%s</h4>
		                     <p class='card-text'>Categoria: <b style='float: right;'>%s</b></p>", $obj->cd_role, $obj->img_role, $obj->nm_role, $obj->cat_role);
                }
            }
        ?>
        </div>
    </div>
    <div class='col-md-6'>
        <div class='col-md-12' id='input'>
        <form method="POST">
        <?php
            $query = "SELECT * FROM stts WHERE id_stt = 1";
            if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
    	            printf ("<div class='row' id='row'>
    	                     <div class='col-md-8'>%s</div>
    	                     <div class='col-md-4'><input class='form-control' type='number' value='%s' name='qnt[]' style='float: right;'>
    	                     <input type='hidden' value='%s' name='id[]'>
    	                     </div>
    	                     </div>", $obj->nm_stt, $obj->vl_stt, $obj->cd_stt);
                }
            }
        ?>
        </form>
        </div>
        <div class='col-xs-12' id='input'>
        <form method="POST">
        <?php
            $query = "SELECT * FROM itens, inv_gun WHERE id_gun = cd_gun AND cat_gun = 3 AND active_gun = 1";
            if ($result = $mysqli->query($query)){
                while ($obj = $result->fetch_object()){
    	            printf ("<div class='row' id='row' >
    	                     <div class='col-md-12' style='display: flex; justify-content: space-evenly;'> 
    	                     <p>%s</p>
    	                     <p>%s</p>
    	                     <p>%s</p>
    	                     <p>%s</p>
    	                     <p>%s</p>
    	                     </div>
    	                     </div>", $obj->nm_gun, $obj->min_dmg_gun, $obj->max_dmg_gun, $obj->range_gun, $obj->rare_gun);
                }
            }
        ?>
        </form>
        </div>
    </div>
</div>
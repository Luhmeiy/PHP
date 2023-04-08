<?php
if (isset($_POST['button'])){
    $prod = $_POST['button'];
    $user = $_SESSION['COD_USER'];
    if ($result = $mysqli->query("SELECT * FROM cart WHERE prod = '".$prod."' AND cart_user = '".$user."'")) {
        /* determine number of rows result set */
        $row_cnt = $result->num_rows;
        if ($row_cnt == 0) {
            $query = "INSERT INTO cart (cd_cart, prod, cart_user, qnt_cart) VALUES (NULL,".$prod.",".$user.",'1')";
            if ($result = $mysqli->query($query)){
            }
        }
        else{
            $query = "UPDATE cart SET qnt_cart = qnt_cart + 1 WHERE prod = '".$prod."'"; //verifica se os dados do login conferem
            if ($result = $mysqli->query($query)){
            }
        }
    }
}
?>
<center><div class="column">
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
<h4 style="float: left; margin-bottom: 1%;">Produtos Populares</h4>
<div class="carousel-inner">
    <form method="POST" style="width: 100%;">
	<div class='item carousel-item active'>
		<div class='row justify-content-center'>
		<?php
			$query = "SELECT * FROM shopin ORDER BY qnt_comprada desc LIMIT 4";
    		if ($result = $mysqli->query($query)) {
    		while ($obj = $result->fetch_object()) {
      			printf ("<div class='col-sm-3'>
							<div class='thumb-wrapper'>
								<div class='img-box'>
									<a href='prod.php?cod=%s'><img src='%s' alt=''></a>
								</div>
								<div class='thumb-content'>
									<h4>%s</h4>
									<p class='item-price'>R$ %s</p>
									<button type='submit' class='btno2 car2' name='button' id='button' value='%s'>Adicionar ao carrinho</button>
								</div>						
							</div>
						</div>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->vl_shop, $obj->cd_shop);
    		}
    		$result->close();
    		}
		?>
		</div>
	</div>
	<div class='item carousel-item'>
		<div class='row justify-content-center'>
		<?php
			$query = "SELECT * FROM shopin ORDER BY qnt_comprada desc LIMIT 4, 4";
    		if ($result = $mysqli->query($query)) {
    		while ($obj = $result->fetch_object()) {
      			printf ("<div class='col-sm-3'>
							<div class='thumb-wrapper'>
								<div class='img-box'>
									<a href='prod.php?cod=%s'><img src='%s' alt=''></a>
								</div>
								<div class='thumb-content'>
									<h4>%s</h4>
									<p class='item-price'>R$ %s</p>
									<button type='submit' class='btno2 car2' name='button' id='button' value='%s'>Adicionar ao carrinho</button>
								</div>						
							</div>
						</div>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->vl_shop, $obj->cd_shop);
    		}
    		$result->close();
    		}
		?>
		</div>
	</div>
	<div class='item carousel-item'>
		<div class='row justify-content-center'>
		<?php
			$query = "SELECT * FROM shopin ORDER BY qnt_comprada desc LIMIT 8, 4";
    		if ($result = $mysqli->query($query)) {
    		while ($obj = $result->fetch_object()) {
      			printf ("<div class='col-sm-3'>
							<div class='thumb-wrapper'>
								<div class='img-box'>
									<a href='prod.php?cod=%s'><img src='%s' alt=''></a>
								</div>
								<div class='thumb-content'>
									<h4>%s</h4>
									<p class='item-price'>R$ %s</p>
									<button type='submit' class='btno2 car2' name='button' id='button' value='%s'>Adicionar ao carrinho</button>
								</div>						
							</div>
						</div>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->vl_shop, $obj->cd_shop);
    		}
    		$result->close();
    		}
		?>
		</div>
	</div>
	</form>
</div>
<!-- Carousel controls -->
<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
	<i class="fa fa-angle-left"></i>
</a>
<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
	<i class="fa fa-angle-right"></i>
</a>
<a href="loja.php" style="float: left; margin-top: 1%;">Veja mais</a>
</div>
</div></center>
<style>
.btno2 {
    border: 2px solid black;
    width: 80%;
    color: black;
    padding: 14px 14px;
    font-size: 16px;
    cursor: pointer;
}
.car2:hover {
    background: #ff9800;
    transition: 1s;
}
</style>
<script>
var y = window.matchMedia("(max-width: 991px)");
myFunction(y); // Call listener function at run time
y.addListener(myFunction);
function myFunction(y) {
    if (y.matches) { // If media query matches
        var i = 12;
        do {
            i -= 1;
            document.getElementsByName('button')[i].innerHTML = "Add";
        } while (i > 0);
    }
    else {
        var i = 12;
        do {
            i -= 1;
            document.getElementsByName('button')[i].innerHTML = "Adicionar ao Carrinho";
        } while (i > 0);
    }
}
</script>
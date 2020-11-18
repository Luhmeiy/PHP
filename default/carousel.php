<center><div class="column">
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
<h4 style="float: left; margin-bottom: 1%;">Produtos Populares</h4>
<div class="carousel-inner">
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
									<a href='#' class='btn btn-primary'>Adicionar ao carrinho</a>
								</div>						
							</div>
						</div>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->vl_shop);
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
									<a href='#' class='btn btn-primary'>Adicionar ao carrinho</a>
								</div>						
							</div>
						</div>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->vl_shop);
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
									<a href='#' class='btn btn-primary'>Adicionar ao carrinho</a>
								</div>						
							</div>
						</div>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->vl_shop);
    		}
    		$result->close();
    		}
		?>
		</div>
	</div>
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

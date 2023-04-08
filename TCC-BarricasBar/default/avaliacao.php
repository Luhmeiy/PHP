<?php
	$query = "SELECT * FROM comment, shop WHERE (SELECT AVG(avaliacao) FROM comment) >= 0 AND (SELECT AVG(avaliacao) FROM comment) <= 20 LIMIT 1";
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
      	echo "<div class='star-rating'>
  			<ul class='list-inline'>
    		<li class='list-inline-item'><i class='fa fa-star'></i></li>
   			<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
  			</ul>
			</div>";
	  }
    $result->close();
    }
?>
<?php
	$query = "SELECT * FROM comment, shop WHERE (SELECT AVG(avaliacao) FROM comment) >= 21 AND (SELECT AVG(avaliacao) FROM comment) <= 40 LIMIT 1";
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
      	echo "<div class='star-rating'>
  		    <ul class='list-inline'>
    		<li class='list-inline-item'><i class='fa fa-star'></i></li>
   			<li class='list-inline-item'><i class='fa fa-star'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
  		    </ul>
            </div>";
	}
    $result->close();
    }
?>
<?php
	$query = "SELECT * FROM comment, shop WHERE (SELECT AVG(avaliacao) FROM comment) >= 41 AND (SELECT AVG(avaliacao) FROM comment) <= 60 LIMIT 1";
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
      	echo "<div class='star-rating'>
  			<ul class='list-inline'>
			<li class='list-inline-item'><i class='fa fa-star'></i></li>
   			<li class='list-inline-item'><i class='fa fa-star'></i></li>
			<li class='list-inline-item'><i class='fa fa-star'></i></li>
			<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
			<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
  			</ul>
			</div>";
	}
    $result->close();
    }
?>
<?php
	$query = "SELECT * FROM comment, shop WHERE (SELECT AVG(avaliacao) FROM comment) >= 61 AND (SELECT AVG(avaliacao) FROM comment) <= 80 LIMIT 1";
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
      	echo "<div class='star-rating'>
  			<ul class='list-inline'>
    		<li class='list-inline-item'><i class='fa fa-star'></i></li>
   			<li class='list-inline-item'><i class='fa fa-star'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star'></i></li>
    		<li class='list-inline-item'><i class='fa fa-star-o'></i></li>
  			</ul>
			</div>";
	}
    $result->close();
    }
?>
<?php
	$query = "SELECT * FROM comment, shop WHERE (SELECT AVG(avaliacao) FROM comment) >= 81 AND (SELECT AVG(avaliacao) FROM comment) <= 100 LIMIT 1";
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
      	echo "<div class='star-rating'>
  			<ul class='list-inline'>
			<li class='list-inline-item'><i class='fa fa-star'></i></li>
   			<li class='list-inline-item'><i class='fa fa-star'></i></li>
			<li class='list-inline-item'><i class='fa fa-star'></i></li>
			<li class='list-inline-item'><i class='fa fa-star'></i></li>
			<li class='list-inline-item'><i class='fa fa-star'></i></li>
  			</ul>
			</div>";
	}
    $result->close();
    }
?>
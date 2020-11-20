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
    <div class="col-md-6" style="background-color: green;" id="col-6">
        <div id="cell">
            <h1>PARA O JOGADOR</h1>
            <input type="button" class="btn-success" value="ENTRE">
        </div>
    </div>
    <div class="col-md-6" style="background-color: blue;" id="col-6">
        <div id="cell">
            <h1>PARA O MESTRE</h1>
            <input type="button" class="btn-success" value="ENTRE">
        </div>
    </div>
</div>
<?php include "default/footer.php"; ?>
<style>
#col-6 {
    display: table;
    text-align: center;
    height: 88.8vh;
}
#cell {
    vertical-align: middle;
    display: table-cell;
}
</style>
</body>
</html>
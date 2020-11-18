<?php
session_start();
include "conecta.php";
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#"><div style="padding: 5px; border: solid black; width: auto; border-radius: 10px;"><b>Controle de Entrada e Saída</b></div></a>
	<a class="navbar-brand" href="index2.php"><div style="padding: 5px; border: solid black; width: auto; border-radius: 10px; position: absolute; right: 10px; vertical-align: top;"><b>Gerenciador Financeiro</b></div></a>
</nav>
<br>
<div class="container-fluid">
<div class="row justify-content-center" style="padding-left: 10px; overflow-y: auto;">
<div class="col-lg-9 example" style="border: 1px solid black; height: 600px; width: 350px; padding-left: 10px; padding-right: 10px; border-radius: 10px; padding-top: 20px; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
<div class="card-columns">
<?php
// Saúde
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '1' AND st_transacao = 'Depósito' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)){
      while ($obj = $result->fetch_object()){
echo "<div class='card bg-primary text-center border-success'>
<div class='card-header border-success'>Saúde</div>
".$obj->descricao."
<div class='card-footer text-success border-success'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-success'>
<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '1' AND st_transacao = 'Extração' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-primary text-center border-danger'>
<div class='card-header border-danger'>Saúde</div>
".$obj->descricao."
<div class='card-footer text-danger border-danger'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-danger'>
<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
// Diversão
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '2' AND st_transacao = 'Depósito' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-warning text-center border-success'>
<div class='card-header border-success'>Diversão</div>
".$obj->descricao."
<div class='card-footer text-success border-success'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-success'>
<button class='btn btn-warning' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '2' AND st_transacao = 'Extração' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-warning text-center border-danger'>
<div class='card-header border-danger'>Diversão</div>
".$obj->descricao."
<div class='card-footer text-danger border-danger'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-danger'>
<button class='btn btn-warning' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
// Mercado
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '3' AND st_transacao = 'Depósito' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-dark text-center border-success'>
<div class='card-header border-success'>Mercado</div>
".$obj->descricao."
<div class='card-footer text-success border-success'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-success'>
<button class='btn btn-dark' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '3' AND st_transacao = 'Extração' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-dark text-center border-danger'>
<div class='card-header border-danger'>Mercado</div>
".$obj->descricao."
<div class='card-footer text-danger border-danger'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-danger'>
<button class='btn btn-dark' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
// Moradia
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '4' AND st_transacao = 'Depósito' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-info text-center border-success'>
<div class='card-header border-success'>Moradia</div>
".$obj->descricao."
<div class='card-footer text-success border-success'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-success'>
<button class='btn btn-info' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
$query1 ="SELECT * FROM transacao, forma WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND id_categoria = '4' AND st_transacao = 'Extração' AND cd_forma = id_forma";
  if ($result = $mysqli->query($query1)) {
      while ($obj = $result->fetch_object()) {
echo "<div class='card bg-info text-center border-danger'>
<div class='card-header border-danger'>Moradia</div>
".$obj->descricao."
<div class='card-footer text-danger border-danger'>
".$obj->st_transacao." - R$ ".$obj->vl_transacao."
</div>
<div class='card-footer border-danger'>
<button class='btn btn-info' type='button' data-toggle='collapse' data-target='#collapseExample'><div id='nav-icon1'>
  <span></span>
  <span></span>
  <span></span>
</div>
<div class='collapse' id='collapseExample'>".$obj->dt_transacao."<br>".$obj->ds_forma."
</div>
</div>
</div>";
}
}
?>
</div>
</div>
<div class="col-lg-3">
<div class="card-columns">
<div class="card border-success" style="position: relative; width: 300%; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
  <div class="card-header text-success"><center>Entrada</center></div>
  <div class="card-body text-success">
  	<?php
  	$query = "SELECT SUM(vl_transacao) as 'entrada' FROM transacao WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND st_transacao = 'Extração'";
  	if ($result = $mysqli->query($query)) {
    	while ($obj = $result->fetch_object()){
        if($obj->entrada == 0){
          $obj->entrada = 0;
          echo "R$ ".$obj->entrada;
        }
        else{
        echo "R$ ".$obj->entrada;
        }
    	}
    }
  	?>
  </div>
  </div>
</div>
<div class="card-columns">
  <div class="card border-danger" style="position: relative; width: 300%; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
  <div class="card-header text-danger"><center>Saída</center></div>
  <div class="card-body text-danger">
  	<?php
  	$query = "SELECT SUM(vl_transacao) as 'saida' FROM transacao WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND st_transacao = 'Depósito'";
  	if ($result = $mysqli->query($query)) {
    	while ($obj = $result->fetch_object()) {
        if($obj->saida == 0){
          $obj->saida = 0;
          echo "R$ ".$obj->saida;
        }
        else{
        echo "R$ ".$obj->saida;
        }
    	}
    }
  	?>
  </div>
  </div>	
  </div>
<center>
<br>
<form action="index2.html" method="post">
<a href="index.php"><input type="button" class="btn btn-danger" value="Sair"></a>
<a href='delete3.php'><input type='button' class='btn btn-warning' value='Excluir Tudo'></a>
</center>
</div>
</div>
</div>
</form>
<style type="text/css">
html{
	width: 100%!important;
	font-family: Arial;
	font-size: 20px;
}
</style>
<style type="text/css">
.example{  
  background-color: #eee; 
  width: 200px;  
  height: 100px;  
  border: 1px dotted black; 
  overflow-y: scroll;
}
.example::-webkit-scrollbar {
  display: none;
}
</style>
<style type="text/css">
#nav-icon1{
  width: 60px;
  height: 45px;
  position: relative;
  margin: auto;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}
#nav-icon1 span{
  display: block;
  position: absolute;
  height: 9px;
  width: 100%;
  background: #d3531a;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}
#nav-icon1 span:nth-child(1) {
  top: 0px;
}
#nav-icon1 span:nth-child(2) {
  top: 18px;
}
#nav-icon1 span:nth-child(3) {
  top: 36px;
}
#nav-icon1.open span:nth-child(1) {
  top: 18px;
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
}
#nav-icon1.open span:nth-child(2) {
  opacity: 0;
  left: -60px;
}
#nav-icon1.open span:nth-child(3) {
  top: 18px;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
</style>
<script type="text/javascript">
$(document).ready(function(){
  $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
    $(this).toggleClass('open');
  });
});
</script>
</body>
</html>
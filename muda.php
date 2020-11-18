<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<body>
<form method="post">
<?php
include "conecta.php";
if (isset($_POST['numero'])){
$n = $_POST['numero'];
$d = $_POST['data'];
$a = $_POST['acao'];
$f = $_POST['forma'];
$c = $_POST['categoria'];
$cs = $_SESSION['COD_USER'];
$de = $_POST['descricao'];
$query ="UPDATE transacao SET vl_transacao = '$n', dt_transacao = '$d', st_transacao = '$a', id_forma = '$f', id_categoria = '$c', id_tb_usuario = '$cs', descricao = '$de' WHERE cd_transacao = '".$_GET['cod']."'";
if ($result = $mysqli->query($query)){
	header("location:index2.php");
}
}
?>
<center>
<div class="container">
	<div class="row" style="margin-top: 2%;">
		<div class="col-md" style="padding-top: 5%;">
		<div style="border: solid black; height:450px; width: 410px; padding-left: 10px; padding-right: 10px; border-radius: 10px; padding-top: 20px;">
<?php
$query1 ="SELECT * FROM transacao WHERE cd_transacao = '".$_GET['cod']."'";
	if ($result = $mysqli->query($query1)) {
    	while ($obj = $result->fetch_object()) {
		$numero = $obj->vl_transacao;
		}
	}
?>
<div class="input-group mb-3">
	<div class="input-group-prepend">
    	<span class="input-group-text">R$</span>
    </div>
	<input class="form-control" placeholder="<?php echo $numero ?>" type="number" name="numero" aria-label="Amount" required><br>
</div>
<?php
$query2 ="SELECT * FROM transacao WHERE cd_transacao = '".$_GET['cod']."'";
	if ($result = $mysqli->query($query2)) {
    	while ($obj = $result->fetch_object()) {
		$data = $obj->dt_transacao;
		}
	}
?>
	<input class="form-control" value="<?php echo $data; ?>" type="date" name="data" required><br>
	<?php
	$query = "SELECT * FROM transacao";
	if ("&obj->st_transacao = 'Depósito'") {
	echo "<input type='radio' name='acao' value='Depósito' checked='checked'> Depósito &nbsp&nbsp&nbsp";
	echo "<input type='radio' name='acao' value='Extração'> Extração";
	}
	else{
	echo "<input type='radio' name='acao' value='Depósito'> Depósito";
	echo "<input type='radio' name='acao' value='Extração' checked='checked'> Extração";
	}
	?>
	<br><br>
<?php
$query4 ="SELECT * FROM transacao, categoria WHERE cd_transacao = '".$_GET['cod']."' AND cd_categoria = id_categoria";
	if ($result = $mysqli->query($query4)) {
    	while ($obj = $result->fetch_object()) {
		$valuecategoria = $obj->cd_categoria;
		$idcategoria = $obj->nm_categoria;
		}
	}
?>
	<select class="form-control" name="categoria">
		<option value="<?php echo $valuecategoria ?>"><?php echo $idcategoria ?></option>
		<option value="1">Saúde</option>
		<option value="2">Diversão</option>
		<option value="3">Mercado</option>
		<option value="4">Moradia</option>
	</select><br>
<?php
$query5 ="SELECT * FROM transacao, forma WHERE cd_transacao = '".$_GET['cod']."' AND cd_forma = id_forma";
	if ($result = $mysqli->query($query5)) {
    	while ($obj = $result->fetch_object()) {
		$valueforma = $obj->cd_forma;
		$idforma = $obj->ds_forma;
		}
	}
?>
	<select class="form-control" name="forma">
		<option value="<?php echo $valueforma ?>"><?php echo $idforma ?></option>
		<option value="1">Crédito</option>
		<option value="2">Débito</option>
		<option value="3">Dinheiro</option>
		<option value="4">Cheque</option>
	</select><br>
<?php
$query6 ="SELECT * FROM transacao WHERE cd_transacao = '".$_GET['cod']."'";
	if ($result = $mysqli->query($query6)) {
    	while ($obj = $result->fetch_object()) {
		$descricao = $obj->descricao;
		}
	}
?>
	<input class="form-control" placeholder="<?php echo $descricao ?>" type="text" name="descricao" required>
	<br>
	<input type="submit" class="btn btn-success" name="GRAVAR">
	<a href="index2.php"><input type="button" class="btn btn-danger" value="Voltar"></a>
</form>
</div>
</div>
</center>
</body>
</html>
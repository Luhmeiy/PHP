<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Gerenciador Financeiro</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#"><div style="padding: 5px; border: solid black; width: auto; border-radius: 10px;"><b>Gerenciador Financeiro</b></div></a>
	<a class="navbar-brand" href="index3.php"><div style="padding: 5px; border: solid black; width: auto; border-radius: 10px; position: absolute; right: 10px; vertical-align: top;"><b>Controle de Entrada e Saída</b></div></a>
</nav>
<br>
<?php
include "conecta.php";
if (isset($_POST['numero'])){
	$sql = "INSERT INTO transacao (cd_transacao, vl_transacao, dt_transacao, st_transacao, id_forma, id_categoria, id_tb_usuario, descricao) VALUES (NULL, '".$_POST['numero']."','".$_POST['data']."','".$_POST['acao']."','".$_POST['forma']."','".$_POST['categoria']."', '".$_SESSION['COD_USER']."', '".$_POST['descricao']."')";
	if ($conn->query($sql) === TRUE) {
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>
<form method="post">
<div class="container">
	<div class="row" style="margin-top: 2%; padding-bottom: 2%;">
		<div class="col-md">
		<div style="border: solid black; height: 600px; width: 350px; padding-left: 10px; padding-right: 10px; border-radius: 10px; padding-top: 20px; box-shadow: 20px 29px 38px rgba(0,0,0,0.30), 0 0 12px rgba(0,0,0,0.22);">
<center style="padding-left: -10px;">
<?php
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
	$query = "SELECT nm_usuario FROM tb_usuario WHERE cd_usuario = '".$_SESSION['COD_USER']."'";
	if ($result = $mysqli->query($query)) {
    	while ($obj = $result->fetch_object()) {
		printf("<label> %s, seja bem-vindo</label>",$obj->nm_usuario);
		}
	}
}
?>
</center>
<div class="input-group mb-3">
	<div class="input-group-prepend">
    	<span class="input-group-text">R$</span>
    </div>
	<input class="form-control" type="number" name="numero" aria-label="Amount" required><br>
</div>
	<input class="form-control" type="date" name="data" required><br>
	<div style="border: solid lightgray; height: 60px; width: auto; padding-left: 10px; padding-right: 10px; border-radius: 10px; padding-top: 10px; padding-bottom: 10px;vertical-align: center;">
	<div class="row" style>
	<div class="col-sm">
	<input type="radio" name="acao" value="Depósito"> Depósito
	</div>
	<div class="col-sm" style="text-align: ">
	<input type="radio" name="acao" value="Extração"> Extração
	</div>
	</div>
	<br>
	</div>
	<br>
	<select class="form-control" name="categoria">
		<option value="1">Saúde</option>
		<option value="2">Diversão</option>
		<option value="3">Mercado</option>
		<option value="4">Moradia</option>
	</select><br>
	<select class="form-control" name="forma">
		<option value="1">Crédito</option>
		<option value="2">Débito</option>
		<option value="3">Dinheiro</option>
		<option value="4">Cheque</option>
	</select><br>
	<input class="form-control" type="text" name="descricao" placeholder="Descrição" required>
	<br>
	<a href="index.php"><input type="button" class="btn btn-danger" value="Voltar"></a>
	<a href='delete2.php'><input type='button' class='btn btn-warning' value='Excluir Tudo'></a>
	<input type="submit" class="btn btn-success" name="GRAVAR">
</div>
</div>
<div class="col-md example" style="border: solid black; overflow: auto; height: 600px; width: 300px; padding-left: 10px; border-radius: 10px; padding-top: 20px; box-shadow: 20px 29px 38px rgba(0,0,0,0.30), 0 0 12px rgba(0,0,0,0.22);"></form>
<?php
include "conecta.php";
$query = "SELECT * FROM transacao, forma, categoria WHERE id_tb_usuario = '".$_SESSION['COD_USER']."' AND cd_forma = id_forma AND cd_categoria = id_categoria";
if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
        printf ("<b>Valor:</b> R$ %s <br> <b>Data:</b> %s <br> <b>Ação:</b> %s <br> <b>Forma:</b> %s <br> <b>Categoria:</b> %s <br> <b>Descrição:</b> <span class='letra'>%s<span> <br> <center> <a href='delete.php?cod=$obj->cd_transacao'><input type='image' src='bin.png'></a> <a href='muda.php?cod=$obj->cd_transacao'><input type='image' src='pencil.png'></a> </center> <hr>", $obj->vl_transacao, $obj->dt_transacao, $obj->st_transacao, $obj->ds_forma, $obj->nm_categoria, $obj->descricao);

    }
    $result->close();
}
?>
</div>
</div>
</div>
<style type="text/css">
html{
	font-family: Arial;
	font-size: 20px;
}
label{
	color: #12E618;
	font-size: 22px;
	padding-bottom: 3%;
}
.row{
	width: 100%;
}
hr{
  -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #EEEEEE -moz-use-text-color #FFFFFF;
  border-style: solid none;
  border-width: 1px 0;
  margin: 18px 0;
}
input[type=image]{
	width: 35px;
	height: 35px;
}
.letra{
	text-transform: capitalize;
}
.example{
	background-color: #eee;
	width: 200px;
	height: 100px;
	border: 1px dotted black;
	overflow-y: scroll;
}
.example::-webkit-scrollbar{
    display: none;
}
</style>
</body>
</html>
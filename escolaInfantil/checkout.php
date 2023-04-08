<!DOCTYPE html>
<?php
	session_start();
	include "conecta.php";
?>
<html>
<meta charset="utf-8">
<head>
	<title>Checkout</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; font-size: 25px;">
	<a class="navbar-brand" href="index.php"><img src="IMGs/sun.png" id="sun" style="height: 100px; width: 100px;"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="corNavbar01">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
		<a class="nav-link" href="conta1.php">Conta</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="preco.php">Preços</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="sobre.php">Sobre</a>
		</li>
		</ul>
	<form class="form-inline">
	<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
	<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
	</form>
	</div>
</nav>
<!-- Checkout -->
<?php
if (isset($_SESSION['cod'])) {
	$query = "SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
	if ($result = $mysqli->query($query)) {
		while ($obj = $result->fetch_object()) {
			if ($obj->preco == 0) {
				if (isset($_POST['Primeiro'])){
					$sql = "UPDATE usuario SET preco = '".$_POST['preco']."' WHERE cd_usuario = '".$_SESSION['cod']."'";
					header("location:Conta1.php");
					if ($conn->query($sql) === TRUE) {
					}
					else{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
					$conn->close();
				}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 order-md-2 mb-4">
		<h4 class="d-flex justify-content-between align-items-center mb-3">
		<span class="text-muted">Seu carrinho</span>
		</h4>
		<ul class="list-group mb-3">
		<li class="list-group-item d-flex justify-content-between lh-condensed">
		<div>
		<h6 class="my-0">
		<?php
		if($_POST['compra'] == 1){
			echo "1 mês";
		}
		if($_POST['compra'] == 2){
			echo "6 meses";
		}
		if($_POST['compra'] == 3){
			echo "12 meses";
		}
		?>
		</h6>
		<small class="text-muted">
		<?php
		if($_POST['compra'] == 1){
			echo "Pagamento para 1 mês";
		}
		if($_POST['compra'] == 2){
			echo "Pagamento para 6 meses";
		}
		if($_POST['compra'] == 3){
			echo "Pagamento para 12 meses";
		}
		?>
		</small>
		</div>
		<span class="text-muted">
		<?php
		if($_POST['compra'] == 1){
			echo "R$120,00 <small class='text-muted'>/ mês</small>";
		}
		if($_POST['compra'] == 2){
			echo "R$108,00 <small class='text-muted'>/ mês</small>";
		}
		if($_POST['compra'] == 3){
			echo "R$90,00 <small class='text-muted'>/ mês</small>";
		}
		?>
		</span>
		</li>
		<li class="list-group-item d-flex justify-content-between">
		<span>Total</span>
		<strong>
		<?php
		if($_POST['compra'] == 1){
			echo "R$120,00";
		}
		if($_POST['compra'] == 2){
			echo "R$648,00";
		}
		if($_POST['compra'] == 3){
			echo "R$1080,00";
		}
		?>
		</strong>
		</li>
		</ul>
		</div>
		<div class="col-md-8 order-md-1">
		<h4 class="mb-3">Endereço de Cobrança</h4>
		<form method="post" action="Checkout.php" class="needs-validation" novalidate="">
			<div class="row">
				<div class="col-md-6 mb-3">
				<label for="firstName">Primeiro nome</label>
				<input type="text" class="form-control" name="Primeiro" id="Primeiro" placeholder="José" required>
				</div>
				<div class="col-md-6 mb-3">
				<label for="lastName">Último nome</label>
				<input type="text" class="form-control" id="Ultimo" placeholder="da Silva" required>
				</div>
			</div>
		<div class="mb-3">
		<?php
			$query1 ="SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
			if ($result = $mysqli->query($query1)) {
			while ($obj = $result->fetch_object()) {
			$email = $obj->email;
			}
			}
		?>
		<label for="email">Email <span class="text-muted"></span></label>
		<input type="email" class="form-control" id="email" placeholder="email@email.com" value="<?php echo $email?>" required>
		</div>
		<div class="row">
			<div class="col-md-9 mb-3">
			<?php
				$query1 ="SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
				if ($result = $mysqli->query($query1)) {
				while ($obj = $result->fetch_object()) {
				$endereco = $obj->endereco;
				}
				}
			?>
			<label for="Endereço">Endereço</label>
			<input type="text" class="form-control" id="Endereço" placeholder="Rua rua 1234" value="<?php echo $endereco?>" required>
			</div>
			<div class="col-md-3 mb-3">
			<?php
				$query1 ="SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
				if ($result = $mysqli->query($query1)) {
				while ($obj = $result->fetch_object()) {
				$cep = $obj->cep;
				}
				}
			?>
			<label for="CEP">CEP</label>
			<input type="text" class="form-control" id="CEP" placeholder="11111-111" maxlength="9" OnKeyPress="formatar('#####-###', this)" value="<?php echo $cep?>" required>
		</div>
		</div>
		<hr class="mb-4">
		<h4 class="mb-3">Método de Pagamento</h4>
		<div class="d-block my-3">
			<div class="custom-control custom-radio">
			<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required>
			<label class="custom-control-label" for="credit">Cartão de Crédito</label>
			</div>
			<div class="custom-control custom-radio">
			<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
			<label class="custom-control-label" for="debit">Cartão de Débito</label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mb-3">
			<label for="cc-name">Nome no cartão</label>
			<input type="text" class="form-control" id="cc-name" placeholder="Jose Silva" required>
			</div>
			<div class="col-md-6 mb-3">
			<label for="cc-number">Número do Cartão</label>
			<input type="text" class="form-control" id="cc-number" placeholder="1234 5678 9123 4567" maxlength="19" OnKeyPress="formatar('#### #### #### ####', this)" required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 mb-3">
			<label for="cc-expiration">Data de Expiração</label>
			<input type="text" class="form-control" id="cc-expiration" placeholder="12/24" maxlength="5" OnKeyPress="formatar('##/##', this)" required>
			</div>
			<div class="col-md-3 mb-3">
			<label for="cc-expiration">CVV</label>
			<input type="text" class="form-control" id="cc-cvv" placeholder="111" maxlength="3" required>
			</div>
		</div>
		<hr class="mb-4">
		<button class="btn btn-primary btn-lg btn-block" name="preco" value="2" type="submit">Finalizar compra</button>
		</form>
		</div>
	</div>
	<br>
</div>
<?php
}
}
}
}
?>
<!-- Modal1 -->
<?php
	if(empty($_SESSION['cod'])) {
?>
<script>
$(document).ready(function(){
	$("#exampleModal").modal('show');
});
</script>
<div class="modal fade" id="exampleModal" role="dialog" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<h2 class="titulo" id="exampleModalLabel">Aviso!</h2>
		</div>
		<div class="modal-body">
		Você precisa estar logado para completar essa ação.
		</div>
		<div class="modal-footer">
		<a href="Escola.html"><button type="button" class="btn btn-secondary">Fechar</button>
		<a href="Conta1.php"><button class="btn btn-success">Cadastro/login</button>
		</div>
		</div>
	</div>
</div>
<?php
}
?>
<!-- Modal2 -->
<?php
if(isset($_SESSION['cod'])) {
$query = "SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
if ($result = $mysqli->query($query)) {
while ($obj = $result->fetch_object()) {
	if ($obj->preco == 2) {
?>
<script>
$(document).ready(function(){
	$("#exampleModal").modal('show');
});
</script>
<div class="modal fade" id="exampleModal" role="dialog" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<h2 class="titulo" id="exampleModalLabel">Aviso!</h2>
		</div>
		<div class="modal-body">
		Você já pagou a matricula do seu filho.
		</div>
		<div class="modal-footer">
		<a href="Escola.html"><button type="button" class="btn btn-secondary">Fechar</button>
		<a href="Conta1.php"><button class="btn btn-success">Conta</button>
		</div>
		</div>
	</div>
</div>
<?php
}
}
}
}
?>
<script>
function formatar(formata, documento){
	var i = documento.value.length;
	var saida = formata.substring(0,1);
	var texto = formata.substring(i)
	if(texto.substring(0,1) != saida){
		documento.value += texto.substring(0,1);
	}
}
</script>
</body>
</html>
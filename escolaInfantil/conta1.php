<!DOCTYPE html>
<?php
	session_start();
	include 'conecta.php';
?>
<html>
<meta charset="utf-8">
<head>
	<title>Conta</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<!--- NAV -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; font-size: 25px;">
	<a class="navbar-brand" href="index.php"><img src="IMGs/sun.png" id="sun" style="height: 100px; width: 100px;"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="corNavbar01">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
		<a class="nav-link active" href="conta1.php">Conta</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="preco.php">Preços</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="sobre.php">Sobre</a>
		</li>
		</ul>
	</div>
</nav>
<!-- Perfil (Pai) -->
<?php
	if(isset($_SESSION['cod'])) {
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 order-md-1">
			<br>
			<h1 class="titulo">Perfil (Pais)</h1>
			<hr>
			<div class="row">
				<br>
				<div class="col-md-7 mb-3">
				<?php
				$query1 ="SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$nome = $obj->nome;
				}
				}
				?>
				<label for="Nome">Nome</label>
				<input type="text" class="form-control" name="Nome" value="<?php echo $nome;?>" disabled>
				</div>
				<div class="col-md-5 mb-3">
				<?php
				$query1 ="SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$email = $obj->email;
				}
				}
				?>
				<label for="Email">Email</label>
				<input type="email" class="form-control" name="Email" value="<?php echo $email;?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-3">
				<?php
				$query1 ="SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$endereco = $obj->endereco;
				}
				}
				?>
				<label for="Endereço">Endereço</label>
				<input type="text" class="form-control" name="Endereço" value="<?php echo $endereco;?>" disabled>
				</div>
				<div class="col-md-5 mb-3">
				<?php
				$query = "SELECT * FROM usuario WHERE cd_usuario = '".$_SESSION['cod']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				if($obj->preco == 0) {
				$stts = "Não pago";
				}
				if($obj->preco == 2) {
				$stts = "Pagamento recebido";
				}
				}
				}
				?>
				<label for="Stts">Status de Pagamento</label>
				<input type="text" class="form-control" name="Stts" value="<?php echo $stts;?>" disabled>
				</div>
				<div class="col-md-3 mb-3">
				<br>
				<p><a href="Preco.php"><input type="button" class="btn btn-success form-control" name="form3-b" value="Compre!"></a></p>
				</div>
			</div>
			<form method="post" name="form3">
			<div class="row">
				<div class="col-md-3">
				<a href="logout.php"><input type="button" class="btn btn-danger" name="form3-b" style="width: 100px;" value="Sair"></a>
				</div>
				<div class="col-md-9"></div>
			</div>
			</form>
		</div>
<!-- Perfil (Filho) -->
		<div class="col-md-6">
			<br>
			<h1 class="titulo">Perfil (Filho)</h1>
			<hr>
			<div class="row">
				<br>
				<div class="col-md-6 mb-3">
				<?php
				$query1 ="SELECT * FROM filho WHERE cd_filho = '".$_SESSION['cod1']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$filho = $obj->nm_filho;
				}
				}
				?>
				<label for="Nome">Nome</label>
				<input type="text" class="form-control" name="Nome" value="<?php echo $filho;?>" disabled>
				</div>
				<div class="col-md-2 mb-3">
				<?php
				$query1 ="SELECT * FROM filho WHERE cd_filho = '".$_SESSION['cod1']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$idade = $obj->ds_idade;
				}
				}
				?>
				<label for="Idade">Idade</label>
				<input type="text" class="form-control" name="Idade" value="<?php echo $idade;?>" disabled>
				</div>
				<div class="col-md-2 mb-3">
				<?php
				$query1 ="SELECT * FROM filho WHERE cd_filho = '".$_SESSION['cod1']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$peso = $obj->ds_peso;
				}
				}
				?>
				<label for="Peso">Peso</label>
				<input type="text" class="form-control" name="Peso" value="<?php echo $peso.' Kg';?>" disabled>
				</div>
				<div class="col-md-2 mb-3">
				<?php
				$query1 ="SELECT * FROM filho WHERE cd_filho = '".$_SESSION['cod1']."'";
				if ($result = $mysqli->query($query1)) {
    			while ($obj = $result->fetch_object()) {
				$altura = $obj->ds_altura;
				}
				}
				?>
				<label for="Altura">Altura</label>
				<input type="text" class="form-control" name="Altura" value="<?php echo $altura;?>" disabled>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br>
					<?php
					$query1 ="SELECT * FROM filho WHERE cd_filho = '".$_SESSION['cod1']."'";
					if ($result = $mysqli->query($query1)) {
    				while ($obj = $result->fetch_object()) {
					$comp = $obj->ds_comp;
					}
					}
					?>
					<h1 class="titulo">Complementos</h1>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<center><textarea class="form-control" id="barra" name="Endereço" style="min-height: 300px; padding-bottom: 40%;" cols="40" disabled><?php echo $comp ?></textarea></center>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<?php
}
?>
<!-- Login -->
<?php
if(empty($_SESSION['cod'])){
if(isset($_POST['senhalo'])){
$senha = $_POST['senhalo'];
$email = $_POST['emaillo'];
$query = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";
if($result = $conn->query($query)){
	while ($obj = $result->fetch_object()){
		$_SESSION['cod'] = $obj->cd_usuario;
		$_SESSION['cod1'] = $obj->id_filho;
	}
}
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-7 mx-auto">
			<div class="card card-signin my-5">
			<div class="card-body" style="padding: 2rem;">
			<h5 class="card-title text-center">Faça login</h5>
			<form method="post" name="form1">
			<div class="form-label-group">
			<input type="email" id="email" name="emaillo" class="form-control" placeholder="Endereço de Email" required>
			<label for="email">Endereço de Email</label>
			</div>
			<div class="form-label-group">
			<input type="password" id="senha" name="senhalo" class="form-control" placeholder="Senha" required>
			<label for="senha">Senha</label>
			</div>
			<input type='button' class='btn btn-success' value='Cadastrar'data-toggle="modal" data-target="#exampleModal">
			<input type="submit" class="btn btn-primary" value="Login" style="float: right;">
			</form>
			</div>
			</div>
		</div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<h2 class="titulo" id="exampleModalLabel">Cadastro</h2>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
<!-- Cadastrar (Pais) -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 order-md-1">
		<form method="post" action="filho.php" name="form2">
		<h1 class="texto">Perfil (Pais)</h1>
		<hr>
			<div class="row">
				<div class="col-md-4 mb-3">
				<label for="prinome">Primeiro nome</label>
				<input type="text" class="form-control" name="prinome" placeholder="José" required>
				</div>
				<div class="col-md-4 mb-3">
				<label for="ultnome">Último nome</label>
				<input type="text" class="form-control" name="ultnome" placeholder="da Silva" required>
				</div>
				<div class="col-md-4 mb-3">
				<label for="email">Email <span class="text-muted"></span></label>
				<input type="email" class="form-control" name="email" placeholder="email@email.com" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 mb-3">
				<label for="endereco">Endereço</label>
				<input type="text" class="form-control" name="endereco" placeholder="Rua rua 1234" required>
				</div>
				<div class="col-md-3 mb-3">
				<label for="cep">CEP</label>
				<input type="text" class="form-control" name="cep" placeholder="11111-111" maxlength="9" OnKeyPress="formatar('#####-###', this)" required>
				</div>
				<div class="col-md-3 mb-3">
				<label for="endereco">Senha</label>
				<input type="text" class="form-control" name="senha" placeholder="1234" required>
				</div>
			</div>
<!-- Cadastrar (filho) -->
			<br><h1 class="texto">Perfil (Filho)</h1>
			<hr>
			<div class="row">
				<div class="col-md-4 mb-3">
				<label for="fprinome">Primeiro nome</label>
				<input type="text" class="form-control" name="fprinome" placeholder="João" required>
				</div>
				<div class="col-md-4 mb-3">
				<label for="fultnome">Último nome</label>
				<input type="text" class="form-control" name="fultnome" placeholder="da Silva" required>
				</div>
				<div class="col-md-2 mb-3">
				<label for="idade">Idade <span class="text-muted"></span></label>
				<input type="number" class="form-control" name="idade" placeholder="6" required>
				</div>
				<div class="col-md-2 mb-3">
				<label for="peso">Peso <span class="text-muted"></span></label>
				<input type="number" class="form-control" name="peso" placeholder="30" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mb-3">
 				<label for="complemento">Complementos <span class="text-muted"></span></label>
				<input type="text" class="form-control" name="complemento" placeholder="Doenças, remédio, alergia" required>
				</div>
				<div class="col-md-4 mb-3">
				<label for="altura">Altura <span class="text-muted"></span></label>
				<input type="text" class="form-control" name="altura" placeholder="1,40" required>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fim Modal -->
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		<a href="filho.php"><button name="form2-b" type="submit" class="btn btn-success">Cadastrar</button>
		</div>
		</div>
	</div>
</div>
</form>
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
<?php
}
?>
<style type="text/css">
:root {
	--input-padding-x: 1.5rem;
	--input-padding-y: .75rem;
}
.card-signin {
	border-width: 1.5px;
	border-radius: .5rem;
	box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}
.card-signin .card-title {
	margin-bottom: 2rem;
	font-weight: 300;
	font-size: 1.5rem;
}
.form-label-group {
	position: relative;
	margin-bottom: 1rem;
}
.form-label-group input {
	height: auto;
	border-radius: 2rem;
}
.form-label-group>input,
.form-label-group>label {
	padding: var(--input-padding-y) var(--input-padding-x);
}
.form-label-group>label {
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	margin-bottom: 0;
	line-height: 1.5;
	color: #495057;
	border: 1px solid transparent;
	border-radius: .25rem;
	transition: all .1s ease-in-out;
}
.form-label-group input::-webkit-input-placeholder {
	color: transparent;
}
.form-label-group input:-ms-input-placeholder {
	color: transparent;
}
.form-label-group input::-ms-input-placeholder {
	color: transparent;
}
.form-label-group input::-moz-placeholder {
	color: transparent;
}
.form-label-group input::placeholder {
	color: transparent;
}
.form-label-group input:not(:placeholder-shown) {
	padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
	padding-bottom: calc(var(--input-padding-y) / 3);
}
.form-label-group input:not(:placeholder-shown)~label {
	padding-top: calc(var(--input-padding-y) / 3);
	padding-bottom: calc(var(--input-padding-y) / 3);
	font-size: 12px;
	color: #777;
}
html{
	width: 100%!important;
}
hr{
	display: block;
	unicode-bidi: isolate;
	margin-block-start: 0.5em;
	margin-block-end: 0.5em;
	margin-inline-start: auto;
	margin-inline-end: auto;
	border-style: inset;
	border-width: 1px;
}
.titulo{
	font-size: 35px;
	font-weight: 700;
}
#barra::-webkit-scrollbar {
    display: none;
}
</style>
</body>
</html>
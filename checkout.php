<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Checkout</title>
<!-- Início dos links externos -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Fim dos links externos -->
</head>
<body style="background-color: #292929; overflow-y: none;" id="scroll2">
<?php
if (isset($_POST['checkout'])) { //verifica se o POST está preenchido
    $query = "SELECT * FROM compra, cart"; //seleciona tudo das tabelas compra e carrinho
    if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
        $sql = "INSERT INTO compra (cd_compra, nome, telefone, endereço, endereco_num, comment, id_prod_com, qnt_compra_com) VALUES (NULL, '".$_POST['nome']."', '".$_POST['phone']."', '".$_POST['rua']."', '".$_POST['number']."', '".$_POST['review']."', '".$obj->prod."', '".$obj->qnt_cart."')"; //insere as variáveis POST na tabela compra
        $sql = "DELETE FROM cart WHERE user = '".$_SESSION['COD_USER']."'"; //remove tudo do carrinho se o código de usuário na tabela carrinho for igual a sessão
    }
    header('location:index.php'); //redireciona o usuário
    }
	if ($conn->query($sql) === TRUE) {
	}
    else{
  		echo $conn->error;
	}
}
?>
<!-- Início do form de checkout -->
<div class="content" id="content" style="margin-top: 5%;">
<div class="row" style="align-items: center; justify-content: center; ">
	<div class="col-md-11" style="background-color: white;">
		<div class="row">
            <!-- Exibe os itens em seu carrinho -->
            <div class="col-md-6">
				<h1><b>Seus Itens</b></h1>
				<div class="row justify-content-left" style="height: 350px;">
					<div class="col-md-12" id="scroll" style="margin-left: 1%;">
                    <?php
                        $query = "SELECT * FROM shop, cart WHERE cd_shop = prod  AND user = '".$_SESSION['COD_USER']."'"; //seleciona tudo das tabelas shop e cart
                        if ($result = $mysqli->query($query)) {
                        while ($obj = $result->fetch_object()) {
                            $sub = $obj->vl_shop * $obj->qnt_cart;
                            printf ("<div class='column' style='padding-left:10px ;'>
                                    <a href='prod.php?cod=%s' style='color: black; text-decoration: none;'>
                                    <div class='card mb-3' id='card'>
                                    <div class='row no-gutters'>
                                    <div class='col-md-3'>
                                    <img src='%s' id='img-expand' style='width: 100px;' class='card-img-top' alt='...'>
                                    </div>
                                    <div class='col-md-4'>
                                    <div class='card-body'>
                                    <h5 class='card-title'><b>%s</b></h5>
                                    </div>
                                    </div>
                                    <div class='col-md-2'>
                                    <div class='card-body'>
                                    <h5 class='card-title'><b>%s</b></h5>
                                    </div>
                                    </div>
                                    <div class='col-md-3' style='padding-right: 5px;'>
                                    <div class='card-body'>
                                    <h5 class='card-title'><b>R$ ".$sub."</b></h5>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </a>", $obj->cd_shop, $obj->img_shop, $obj->nm_shop, $obj->qnt_cart);
                        }
                        $result->close();
                        }
                    ?>
					</div>
				</div>
			</div>
            <!-- Form para o usuário colocar sua localização e forma de pagamento -->
            <form method="POST">
				<h1><b>Checkout</b></h1>
				<h4><p style="color: gray;">Detalhes de Envio</p></h4>
				<div class="row">
					<div class="col-md-6">
						<input class="form-control" type="text" name="nome" placeholder="Nome">
						<input class="form-control" type="text" name="rua" placeholder="Rua" style="margin-top: 1%;">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="tel" name="phone" placeholder="Telefone">
						<input class="form-control" type="number" name="number" placeholder="Número" style="margin-top: 1%;">
					</div>
				</div>
                <div class="row justify-content-center">
                    <textarea class="form-control" id="review" name="review" rows="4" cols="50" style="resize:none; width: 95%; margin-bottom: 1%;" placeholder="Adicione algum comentário quanto ao pedido (opcional)"></textarea>
                </div>
				<div class="row justify-content-center">
        		  <input type="submit" id="checkout" name="checkout" class="btno btn-success checkout" value="Finalizar Compra" style="width: 50%;">
				</div>
            </form>
		</div>
	</div>
</div>
</div>
<!-- Fim do form de checkout -->
<style type="text/css">
	@media screen and (min-width: 1050px) {
    #content {margin-top: 50%;}
}
input {
    width: 200px;
    margin: 10px auto;
    display: block;
}
.btno {
    border: 1px solid white;
    width: 100%;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}
.column{
	min-width: 100%;
}
.card{
	width: 100%;
	min-width: 100%;
}
div#scroll { 
    margin:4px, 4px; 
    padding:4px;  
    width: 500px; 
    height: 61.5vh; 
    overflow-x: hidden; 
    overflow-x: auto;
    overflow-x: hidden; 
    overflow-x: none;
    text-align:justify; 
}
#scroll2{ 
    overflow-x: hidden; 
}
::-webkit-scrollbar {
    width: .95em;
}
::-webkit-scrollbar-track {
    background-color: rgba(217, 217, 217, .5);
}
::-webkit-scrollbar-thumb {
    background: rgb(91,192,222);
}
</style>
</body>
</html>
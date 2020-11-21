<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
$query = "SELECT *,SUM(qnt_compra_com)*vl_shop AS comprados FROM comprados, shopin WHERE id_prod_com = cd_shop AND cod_compra = ".$_GET['cod']." GROUP BY id_prod_com";
if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
        $nome = $obj->nome;
        $telefone = $obj->telefone;
        $mensagem = $obj->comment;
        $data = date("Y/m/d");
        $endereco = $obj->endereço;
        $total += number_format($obj->comprados,2);
    }
}
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<head>
	<title>Barrica's Bar</title>
</head>
<body>
<center><table style='width: 510px;'>
    <tr>
        <td colspan='4'>
            <img src='https://tcc-barricas.000webhostapp.com/IMGs/logo.png' id='img'>
            <b><h1 style='font-size: 56px;'>Obrigado</h1></b>
        </td>
    </tr>
    <tr>
        <td colspan='4'>
            <b>Olá <?php echo $nome; ?>,</b>
            <p>Obrigado por comprar de Barrica's Bar</p>
            <p id='gray'>(Guarde uma cópia deste recibo)</p>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='4'>
            <b id='gray'>INFORMAÇÕES DO PEDIDO</b>
            <hr>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='2'>
            <b>ID do pedido:</b>
            <p><?php echo $_GET['cod'];?></p>
            <b>Data do Pedido:</b>
            <p><?php echo $data;?></p>
        </td>
        <td colspan='2'>
            <b>Telefone:</b>
            <p><?php echo $telefone;?></p>
            <b>Endereço:</b>
            <p><?php echo $endereco;?></p>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='4'>
            <b id='gray'>COMENTÁRIO ADICIONAL</b>
            <hr>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='4'>
            <p><?php echo $mensagem;?></p>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='4'>
            <b id='gray'>PRODUTOS ADQUIRIDOS</b>
            <hr>
        </td>
    </tr>
    <?php
        $query = "SELECT *,SUM(qnt_compra_com)*vl_shop AS vl_prodall FROM comprados, shopin WHERE id_prod_com = cd_shop AND cod_compra = ".$_GET['cod']." GROUP BY id_prod_com"; //exibe os itens se o código do produto na tabela carrinho for o mesmo código que na tabela shop e se o código do usuário na sessão for o mesmo que o código na tabela carrinho
        if ($result = $mysqli->query($query)) {
            while ($obj = $result->fetch_object()) {
                $num = number_format($obj->vl_prodall, 2);
                echo "<tr>
                      <td><b>".$obj->nm_shop."</b></td>
                      <td>R$ ".$obj->vl_shop."</td>
                      <td id='qtn'>
                      <input type='number' value='".$obj->qnt_compra_com."' name='qnt' disabled>
                      </td>
                      <td>R$ ".$num."</td>
                      </tr>";
            }
            $result->close();
        }
    ?>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='2'>
            <b id='gray'>TOTAL A SER PAGO:</b>
        </td>
        <td colspan='2'>
            <b style='float: right'>
                R$ <?php
                    $query = "SELECT SUM(qnt_compra_com)*vl_shop AS comprados FROM comprados, shopin WHERE id_prod_com = cd_shop AND cod_compra = ".$_GET['cod']." GROUP BY id_prod_com";
                    if ($result = $mysqli->query($query)) {
                        while ($obj = $result->fetch_object()) {
                            $resultado += $obj->comprados;
                        }
                        $totall = number_format($resultado, 2);
                        echo $totall;
                    }
                ?>
            </b>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='4'>
            <hr>
        </td>
    </tr>
    <tr>
        <td colspan='4' style='margin-bottom: 15px; font-size: 15px;'>
            <p>Copyright &copy; 2020 <a href='https://tcc-barricas.000webhostapp.com/'>Barrica's Bar</a></p>
            <a href='https://tcc-barricas.000webhostapp.com/termos.php'>Termos de Serviço</a> | <a href='https://tcc-barricas.000webhostapp.com/privacidade.php'>Política de Privacidade</a>
        </td>
    </tr>
</table></center>
</body>
</html>
<style type='text/css'>
body {
    margin:0px;
    font-size: 20px;
}
* {
    font-family: 'Lato', sans-serif;
}
#img{
    margin-top: 15px;
    height: 150px;
    object-position: center;
}
#gray{
    color: #666666;
}
table{
    text-align: center;
}
</style>
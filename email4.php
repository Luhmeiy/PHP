<?php
session_start();
include "default/conecta.php";
$_SESSION['cod_com'] = 1;
$query = "SELECT *,SUM(qnt_compra_com)*vl_shop AS comprados FROM comprados, shopin WHERE id_prod_com = cd_shop AND cod_compra = ".$_SESSION['cod_com']." GROUP BY id_prod_com";
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
// Corpo do Email
$arquivo = "
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
<html>
<center><table style='width: 510px;'>
    <tr>
        <td colspan='4'>
            <img src='https://tcc-barricas.000webhostapp.com/IMGs/logo.png' id='img'>
            <b><h1 style='font-size: 56px;'>Obrigado</h1></b>
        </td>
    </tr>
    <tr>
        <td colspan='4'>
            <b>Olá ".$nome.",</b>
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
            <p>".$_SESSION['cod_com']."</p>
            <b>Data do Pedido:</b>
            <p>".$data."</p>
        </td>
        <td colspan='2'>
            <b>Telefone:</b>
            <p>".$telefone."</p>
            <b>Endereço:</b>
            <p>".$endereco."</p>
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
            <p>".$mensagem."</p>
        </td>
    </tr>
    <tr style='text-align: left;'>
        <td colspan='4'>
            <b id='gray'>PRODUTOS ADQUIRIDOS</b>
            <hr>
        </td>
    </tr>";
    $query = "SELECT *,SUM(qnt_compra_com)*vl_shop AS vl_prodall FROM comprados, shopin WHERE id_prod_com = cd_shop AND cod_compra = ".$_SESSION['cod_com']." GROUP BY id_prod_com"; //exibe os itens se o código do produto na tabela carrinho for o mesmo código que na tabela shop e se o código do usuário na sessão for o mesmo que o código na tabela carrinho
        if ($result = $mysqli->query($query)) {
        while ($obj = $result->fetch_object()) {
            $num = number_format($obj->vl_prodall, 2);
            $arquivo .= "<tr>
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
    $arquivo .=  "</tr>
    <tr style='text-align: left;'>
        <td colspan='2'>
            <b id='gray'>TOTAL A SER PAGO:</b>
        </td>
        <td colspan='2'>
            <b style='float: right'>
                R$ ";
                    $query = "SELECT SUM(qnt_compra_com)*vl_shop AS comprados FROM comprados, shopin WHERE id_prod_com = cd_shop AND cod_compra = ".$_SESSION['cod_com']." GROUP BY id_prod_com";
                    if ($result = $mysqli->query($query)) {
                        while ($obj = $result->fetch_object()) {
                            $resultado += $obj->comprados;
                        }
                        $totall = number_format($resultado, 2);
                        $arquivo .=  "$totall";
                        $result->close();
                    }
            $arquivo .=  "</b>
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
            <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>
        </td>
    </tr>
</table></center>
</html>";
//enviar
// emails para quem será enviado o formulário
    $emailenviar = "medeiros.luizhenrique@yahoo.com.br";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site";
    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: '.$nome.' <$email>';
    //$headers .= "Bcc: $EmailPadrao\r\n";
    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
        echo "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
        echo $arquivo;
    } else {
        echo "ERRO AO ENVIAR E-MAIL!";
    }
?>
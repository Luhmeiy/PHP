<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Email</title>
<?php include "default/bootstrap.php"; ?>
</head>
<body>
<?php
if (isset($_POST['button'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['msg'];
    $query = "INSERT INTO email (cd_mail, nm_mail, email, telefone, mensagem) VALUES (NULL, '".$nome."', '".$email."', '".$telefone."', '".$mensagem."')";
    if ($result = $mysqli->query($query)){
    }
}
?>
<div id="contato_form">
    <form method="POST" name="form_contato">
        <p class="titulo">Formulário <small class="asteristico">*Campos Obrigatorios</small></p>
        <table align="center">
            <tr>
                <td>Nome:<sup class="asteristico">*</sup></td>
                <td>
                    <input class="form-control" type="text" name="nome" maxlength="40" />
                </td>
            </tr>
            <tr>
                <td>E-mail:<sup class="asteristico">*</sup></td>
                <td>
                    <input class="form-control" type="email" name="email" maxlength="30" />
                </td>
            </tr>
            <tr>
                <td>Telefone:<sup class="asteristico">*</sup></td>
                <td>
                    <input class="form-control" type="text" name="telefone" maxlength="14" />
                </td>
            </tr>
            <tr>
                <td>Mensagem:<sup class="asteristico">*</sup></td>
                <td>
                    <textarea class="form-control" name="msg" cols="16" rows="5"></textarea>
                </td>
            </tr>
            <tr align="right";>
                <td colspan="2">
                    <input type="reset" class="btno car" value="Limpar" />
                    <input type="submit" class="btno car" name="button" value="Enviar" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right"><small class="asteristico">* Campos obrigatorios</small></td>
            </tr>
        </table>
    </form>
</div>
<style type="text/css">
body{
    font-size:12px;
    font-family:Verdana, Geneva, sans-serif;
}
#contato_form{
    width:500px;
    min-height:175px;
    color:#999;
    margin:auto;
}
.asteristico{
    color:#F00;
}
textarea {
    resize: none;
}
.btno {
    border: 2px solid #f59842;
    width: auto;
    background-color: #f59842;
    padding: 10px 14px;
    margin-left: 5px;
    font-size: 16px;
    cursor: pointer;
    float: right;
}
</style>
</body>
</html>
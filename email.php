<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: medeiros.luizhenrique@yahoo.com.br\r\n"; // remetente
$headers .= "Return-Path: luizhenrique0967@gmail.com\r\n"; // return-path
$envio = mail("medeiros.luizhenrique@yahoo.com.br", "Assunto", "Texto", $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
?>
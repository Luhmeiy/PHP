<!DOCTYPE html>
<?php
session_start();
include "default/conecta.php";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Local</title>
<!-- Início dos links externos -->
<link rel="stylesheet" type="text/css" href="CSS/car.css">
<link rel="stylesheet" type="text/css" href="CSS/map.css">
<link rel="stylesheet" type="text/css" href="CSS/footer.css">
<!-- Início dos links externos -->
</head>
<body>
<!-- Início do header -->
<?php
include 'default/header.php';
?>
<!-- Fim do header -->
<!-- Contate-nos e Google Maps -->
<center><div class="row" style="padding-top: 3%; padding-bottom: 3%; background-color: orange;">
    <div class="col-md-6">
        <div class="col-md-1"></div>
        <!-- Início do Google Maps -->
        <div class="col-md-10">
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 350px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.4518500831427!2d-46.97024339731655!3d-24.296783542883524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d029bcc73cf0d5%3A0x295c563cbebb095f!2sBarrica&#39;s%20Bar%20...A%20Casa%20do%20Rock!5e0!3m2!1spt-BR!2sbr!4v1595330649437!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Fim do Google Maps -->
        <div class="col-md-1"></div>
    </div>
    <div class="col-md-6" style="margin-top: 50px;">
        <div class="col-md-1"></div>
        <!-- Início do contate-nos -->
        <div class="col-md-10">
            <div class="hidden" id="image">
                <img src="IMGs/logo.png" id="img">
            </div>
            <div class="contact" id="contact">
                <h1>Venha nos conhecer!</h1>
				Barrica's Bar é o bar e restaurante que alegrara as suas noites! Com rock das antigas tocando e algumas boas bebidas, o que mais você poderia querer? Aproveite o ambiente agradável e faça amigos que tenham o mesmo interesse que você!
            </div>
        </div>
        <!-- Fim do contate-nos -->
        <div class="col-md-1"></div>
    </div>
</div></center>
<!-- Fim do Google Maps e contate-nos -->
<!-- Início do footer -->
<?php
include "default/footer.php";
?>
<!-- Fim do footer -->
<style>
#img{
    height: 150px;
    object-position: center;
}
</style>
<script type="text/javascript">
var x = window.matchMedia("(max-width: 1499px)");
myFunction(x);
x.addListener(myFunction);
function myFunction(x) {
    if (x.matches) { 
        $("#image").addClass("hidden"); 
    } else {
    }
}
var y = window.matchMedia("(min-width: 1500px)");
ourFunction(y);
y.addListener(ourFunction);
function ourFunction(y) {
    if (y.matches) {
        $("#image").removeClass("hidden"); 
    } else {
    }
}
</script>
</body>
</html>
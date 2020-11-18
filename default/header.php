<?php
include "bootstrap.php";
?>
<link rel="stylesheet" type="text/css" href="CSS/css.css">
<script src="JS/js.js"></script>
<header class="navbar navbar-light flex-column flex-md-row bd-navbar sticky" style="background-color: #FFA500;">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="" id="content">
            <a href="loja.php" id="tudo">Produtos</a>
            <a href="sobre.php" id="tudo">Sobre Nós</a>
            <a href="local.php" id="tudo">Local</a>
            <a href="login.php" id="tudo">Conta</a>
            <?php 
                if ($_SESSION['COD_USER'] == 43) { 
                    echo "<a href='dashboard3.php' id='tudo'>Dashboard</a>";
                }
            ?>
        </div>
    </div>
    <button class="navbar-toggler collapsed mySidenav" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav();">
	    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav-scroll" >
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a href="index.php" class="logo">Barrica's Bar</a>
            </li>
        </ul>
    </div>
</header>
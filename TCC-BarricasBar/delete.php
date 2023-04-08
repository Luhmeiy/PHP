<?php
    session_start();
    include "default/conecta.php";
    $query = "DELETE FROM cart WHERE cart_user = '".$_SESSION['COD_USER']."'";
    if ($result = $mysqli->query($query)) {
        header ("location:email.php");
    }
?>
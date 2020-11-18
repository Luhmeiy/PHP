<?php
session_start();
include "conecta.php";
$query =("DELETE FROM transacao WHERE cd_transacao = '".$_GET['cod']."'");
if ($result = $mysqli->query($query)){
	header("location:index2.php");
}
?>
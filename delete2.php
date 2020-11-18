<?php
include "conecta.php";
$query =("DELETE FROM transacao");
if ($result = $mysqli->query($query)){
		header("location:index2.php");
}
?>
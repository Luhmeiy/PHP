<?php
    $connect = mysqli_connect("localhost", "id15514419_graph_user", "?oas^gw*@4O<#Xbv", "id15514419_graph");
    $query = "SELECT * FROM info WHERE nm_info = '".$_GET['name']."'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result)) {
        $currency[] = "[".$row["guide"].",".$row["high"]."],";
    }
    $query = "SELECT * FROM info WHERE nm_info = '".$_GET['name2']."'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result)) {
        $currency2[] = "[".$row["guide"].",".$row["high"]."],";
    }
?> 
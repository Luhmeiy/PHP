<?php
$servername = "localhost";
$username = "id15514419_graph_user";
$password = "?oas^gw*@4O<#Xbv";
$dbname = "id15514419_graph";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mysqli = new mysqli("localhost", "id15514419_graph_user", "?oas^gw*@4O<#Xbv", "id15514419_graph");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
}
?>
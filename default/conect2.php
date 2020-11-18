<?php
$servername = "localhost";
$username = "id15248224_cyberpunk_user";
$password = "qpQvtk4mR*w\pi|@";
$dbname = "id15248224_cyberpunk";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mysqli = new mysqli("localhost", "id15248224_cyberpunk_user", "qpQvtk4mR*w\pi|@", "id15248224_cyberpunk");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else{
}
?>

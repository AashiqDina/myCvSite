<?php

$servername = "127.0.0.1:8889";
$username = "root";
$password = "root";
$dbname = "Miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

?>

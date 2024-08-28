<?php
session_start();
include('Conn.php');

$Title = $_GET ["Title"];
$BodyText = $_GET ["UserText"];
$UserID = $_SESSION['UserID'];

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

$sql = "INSERT INTO TheBlog (Title, BodyText, DateAndTime, UserID) VALUES ('$Title', '$BodyText', NOW() , $UserID)";
 if ($conn->query($sql) === TRUE) {

echo "User Posted";
header('Location: http://localhost:8888/ViewBlog.php');

 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
 }

 exit;
?>

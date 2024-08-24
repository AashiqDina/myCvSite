<?php

include('Conn.php');

$Title = $_GET ["Title"];
$BodyText = $_GET ["UserText"];
$Name = "$_SESSION[UserName]";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

$sql = "INSERT INTO Blog (Title, BodyText, DateAndTime, Name) VALUES ('$Title', '$BodyText', NOW() , '$Name')";
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

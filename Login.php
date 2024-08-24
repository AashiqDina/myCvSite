<?php

include('Conn.php');

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$Login = "SELECT * FROM `USERS` WHERE Email = '$Email' AND UserPassword = '$Password'";
$QueryRequest = mysqli_query($conn, $Login);
$getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);
$numberOfRows = mysqli_num_rows($QueryRequest);

if($numberOfRows >= 1){
    session_start();
    // $_SESSION["UserName"] = "$getRow[firstName]" . " " . "$getRow[lastName]";
    $_SESSION["FirstName"] = $getRow["firstName"];
    $_SESSION["LastName"] = "$getRow[lastName]";
    $_SESSION["UserID"] = "$getRow[ID]";
    $_SESSION["Log"] = "Logged";
    header('Location: Index.php');
}
else{
    header('Location: LoginError.html');
}

?>

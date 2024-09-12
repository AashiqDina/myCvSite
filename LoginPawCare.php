<?php

include('Conn2.php');

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$Login = "SELECT * FROM `USERSPO` WHERE Email = '$Email' AND UserPassword = '$Password'";
$QueryRequest = mysqli_query($conn, $Login);
$getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);
$numberOfRows = mysqli_num_rows($QueryRequest);

$Login2 = "SELECT * FROM `USERSPM` WHERE Email = '$Email' AND UserPassword = '$Password'";
$QueryRequest2 = mysqli_query($conn, $Login2);
$getRow2 = mysqli_fetch_array($QueryRequest2, MYSQLI_ASSOC);
$numberOfRows2 = mysqli_num_rows($QueryRequest2);

if($numberOfRows >= 1){
    session_start();
    $_SESSION["UserName"] = "$getRow[FirstName]" . " " . "$getRow[LastName]";
    $_SESSION["UserId"] = "$getRow[id]";
    $_SESSION["PetMinder"] = false;
    $_SESSION["PetOwner"] = true;
    $LoggedIn = true;
    header('Location: Homepage.php');
}
else if($numberOfRows2 >=1){
    session_start();
    $_SESSION["UserName"] = "$getRow2[FirstName]" . " " . "$getRow2[LastName]";
    $_SESSION["UserId"] = "$getRow2[id]";
    $_SESSION["PetMinder"] = true;
    $_SESSION["PetOwner"] = false;
    $LoggedIn = true;
    header('Location: Homepage.php');
}
else{
    // header('Location: Register.html');
    echo $numberOfRows;
    echo $numberOfRows2;
}

?>

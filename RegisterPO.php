<?php

include('Conn.php');

$FirstName = $_POST ["firstName"];
$LastName = $_POST ["lastName"];
$Email = $_POST ["Email"];
$Password = $_POST ["Password"];
$confirmPassword = $_POST ["confirmPassword"];

if ($Password == $confirmPassword){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $sql = "INSERT INTO UsersPO (FirstName, LastName, Email,
        UserPassword) VALUES ('$FirstName', '$LastName', '$Email', '$Password')";
        if ($conn->query($sql) === TRUE) {

        echo "User Registered";

        } 
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: RegisterPO.html');
        }
    $conn->close();
 header('Location: Login.php');
 exit;
}
else{
    header('Location: RegisterPO.html');
}

?>

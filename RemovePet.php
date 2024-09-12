<?php
    session_start();
    include('Conn2.php');
    $Id = $_SESSION["UserId"];
    $PetId = $_GET["ToRemove"];

    if ($_GET){
        $sql = "DELETE FROM `pets` WHERE id = $PetId and owner_id = $Id";
        if ($conn->query($sql) === TRUE) {

        } 
    }

    header('Location: MyProfile.php');


?>

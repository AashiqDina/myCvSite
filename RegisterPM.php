<?php
include('Conn.php');

$FirstName = $_POST ["firstName"];
$LastName = $_POST ["lastName"];
$Email = $_POST ["Email"];
$Number = $_POST ["phoneNumber"];
$Password = $_POST ["Password"];
$confirmPassword = $_POST ["confirmPassword"];

if ($Password == $confirmPassword){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $sql = "INSERT INTO USERSPM (FirstName, LastName, Email, pNumber,
        UserPassword) VALUES ('$FirstName', '$LastName', '$Email', '$Number', '$Password')";

        if ($conn->query($sql) === TRUE) {

            echo "User Registered";

        }
            
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header('Location: RegisterPM.html');
        }

        $conn->close();
        include('Conn.php');

        $Get = "SELECT * FROM `USERSPM` WHERE Email = '$Email' AND UserPassword = '$Password'";
        $QueryRequest = mysqli_query($conn, $Get);
        $getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);
        $numberOfRows = mysqli_num_rows($QueryRequest);

        $MinderId = "$getRow[id]";
        $MinderName = "$FirstName " . "$LastName";

        $sql = "INSERT INTO PMINFO (MinderId, MinderName, PetWalking, PetSitting,
        PetTaxi, MinderDescription, MinderLocation, Price) VALUES ('$MinderId', '$MinderName', 0, 0, 0, 'Hello, I am new to Paw Care', 'No current location', 10)";

        if ($conn->query($sql) === TRUE) {

        echo "User Registered Fully";

        } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header('Location: RegisterPM.html');
        }
    $conn->close();
    }
}
else{
    header('Location: RegisterPM.html');
}

header('Location: Homepage.php');
exit;
?>

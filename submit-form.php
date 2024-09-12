<?php
include('Conn2.php');
session_start();
// Get the form data
$petName = $_POST['pet-select'];
$serviceType = $_POST['service-type'];
$notes = $_POST['notes'];
$dateOfAppointment = $_POST['date-of-appointment'];
$formatted_date = date('Y-m-d', strtotime($dateOfAppointment));
$startTime = $_POST['start-time'];
$endTime = $_POST['end-time'];
$location = $_POST['location'];
$address = $_POST['address'];
$UserId = $_SESSION["UserId"];
$MinderId = $_POST['MindId'];


// Check for errors
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "Connection successful";
}


// Insert the data into the database
echo "1";
$sql = "INSERT INTO bookingform(pet_name, service_type, notes, date_of_appointment, start_time, end_time, _location, _address, owner_id, minder_id) VALUES ('$petName', '$serviceType', '$notes', '$formatted_date', '$startTime', '$endTime', '$location', '$address', '$UserId', '$MinderId')";
echo "2";
mysqli_query($conn, $sql);
echo "3";

header('Location: MyProfile.php');

?>

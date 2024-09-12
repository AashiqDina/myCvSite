<?php
  include('Conn2.php');
  session_start();

  $UserId = $_SESSION["UserId"];
  $MinderId = $_GET["BookMinder"];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Care</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="makeBooking.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round" />


</head>
<body>
    <header>
        <hgroup class="Title">
          <h1><a href="Homepage.php"><img src="/imgs/Logo.png" alt="Logo" class="Logo"></a></h1>
        </hgroup>
        <div class="Logo">
        </div>
        <div class="Links">
            <nav>
                <ul>
                    
                    <a href="/Search.php"><img src="/imgs/MagGlass.png" class="searchIcon" alt="">Search Sitters</a>
                    <a href="Homepage.php#JumpTo" class="#Services">Services</a>
                    <a href="/Support.php" class="Support">Support</a>
                </ul>
            </nav>
        </div>
        <div>
            <?php
                if(isset($_SESSION["UserId"])){
                    echo '<div class="MyProf"><a href="/MyProfile.php">My Profile</a></div>';
                    echo $getRows;
                }
            ?>
        </div>
        <div class="Line2"></div>
    </header>

<form action="submit-form.php" method="post">
  <fieldset class="Form">
    <legend class="BookTitle">Book</legend>
  <label class="SelectPetTitle" for="pet-select">Select Pet:</label>
  <select class="SelectPet" id="pet-select" name="pet-select">
    <option value="" disabled selected hidden>Select</option>
  <?php
      // Connect to the database

      //CHANGE THIS so that $ownerid is equal to the ownerid of whoever's logged in (SESSION variable)
      $ownerid = $UserId;

      $sql = "SELECT PetName FROM pets WHERE owner_id = $ownerid";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) 
      {
        while($row = mysqli_fetch_assoc($result)) 
        {
          echo "<option value='" . $row['PetName'] . "'>" . $row['PetName'] . "</option>";
        }
      }
      else
      {
        echo"<option value='no-pets'>You have no pets</option>";
      }

      // Close the database connection
      mysqli_close($conn);
    ?>
    </select>
  <br>
  
  <label class="SelectTypeTitle" for="service-type">Service Type:</label>
  <select class="SelectType" id="service-type" name="service-type">
  <option value='' disabled selected hidden >Select</option>"
  <option value='Pet walking'>Pet Walking</option>"
  <option value='Pet sitting'>Pet Sitting</option>"
  <option value='Pet taxi'>Pet Taxi</option>"
  </select>
  <br>
  <br>


  <label class="NotesTitle" for="notes">Notes:</label>
  <textarea class="Notes" id="notes" name="notes"></textarea>
  <br>

  <label class="dofaTitle" for="date-of-appointment">Date of Appointment:</label>
  <input class="dofa" type="date" id="date-of-appointment" name="date-of-appointment" required>
  <br>

  <label class="StartTimeTitle" for="start-time">Start Time:</label>
  <input class="StartTime" type="time" id="start-time" name="start-time" required>
  <br>

  <label class="EndTimeTitle" for="end-time">End Time:</label>
  <input class="EndTime" type="time" id="end-time" name="end-time" required>
  <br>

  <label class="LocationTitle" for="location">Pickup/Dropoff Location:</label>
  <input class="Location" type="text" id="location" name="location">
  <br>

  <label class="AddressTitle" for="address">Address (Street, Number and Postcode):</label>
  <input class="Address" type="text" id="address" name="address" required>
  <?php
    echo '<input type="hidden" name="MindId" value="' . $MinderId . '">'
  ?>
  <br>

<button name = "submitbutton" type="submit" class="SubButton"><b>Submit</b></button>
</fieldset>
</form> 


<!--This is to make sure they book a day in the future-->
<script>
  // Get a reference to the date of appointment input field
  const dateOfAppointmentInput = document.getElementById('date-of-appointment');

  // Listen for the form submit event
  document.querySelector('form').addEventListener('submit', (event) => {
    // Get the current date
    const currentDate = new Date();

    // Get the date of appointment entered by the user
    const dateOfAppointment = new Date(dateOfAppointmentInput.value);

    // Check if the date of appointment is in the past
    if (dateOfAppointment < currentDate) {
      // Prevent the form from submitting
      event.preventDefault();

      // Display an error message to the user
      alert('Must be a date later than today');
    }
  });
</script>

<!--This is to make sure they can't make a booking if they have no pets-->
<script>
  const pet = document.getElementById('pet-select');

  // Listen for the form submit event
  document.querySelector('form').addEventListener('submit', (event) => 
  {
    if (pet.value === 'no-pets') 
    {
      // Prevent the form from submitting
      event.preventDefault();
      // Display an error message to the user
      alert('You have no pet added to the system');
    }
  });
</script>

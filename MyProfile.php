<?php
    session_start();
    include('Conn2.php');
    $Id = $_SESSION["UserId"];


    $PetName = $_POST["PetName"];
    $PetType = $_POST["PetType"];
    $PetWeight = $_POST["Weight"];

    $NumPets = "SELECT * FROM `pets` WHERE owner_id = $Id";
    $QueryRequest = mysqli_query($conn, $NumPets);
    $getRows = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);
    $numberOfRows = mysqli_num_rows($QueryRequest);

    $PetNameOne = $getRows["PetName"];
    $PetIdOne = $getRows["id"];
    $getRows = mysqli_fetch_array($QueryRequest);
    $PetNameTwo = $getRows["PetName"];
    $PetIdTwo = $getRows["id"];
    $getRows = mysqli_fetch_array($QueryRequest);
    $PetNameThree = $getRows["PetName"];
    $PetIdThree = $getRows["id"];

    $numRows;


    if ($_POST){
        if ($numberOfRows >= 3){
            echo '<script>alert("You have reached the maximum number of pets")</script>';
        }
        else{
             $sql = "INSERT INTO pets (PetName, PetType, PetWeight, owner_id) VALUES ('$PetName','$PetType',$PetWeight,$Id)";

                if ($conn->query($sql) === TRUE) {
                    header("Refresh:0");
                } 
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Care</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="MyProfile.css">
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
                    echo '<div class="MyProf"><a href="/Logout.php">Logout</a></div>';
                    echo $getRows;
                }
            ?>
        </div>
        <div class="Line2"></div>
    </header>

    <section>
        <article>
            <form method="post" action="http://localhost:8888/MyProfile.php" id="AddPets">
            <fieldset class="AddPets">
                <p>
                    <legend class="AddPetTitle">Add Pet</legend>
                     <div class="Line"></div>

                    <br/>
                        <input type="text" class="PetName" name="PetName" placeholder="Input pet-name"><br/>
                        <input type="text" class="PetType" name="PetType" placeholder="Dog, cat...">
                        <input type="number" class="Weight" name="Weight" placeholder="Input weight (kg)"><br/>
                    <div>
                        <button type="submit" class="AddPetButton">Submit</button>
                    </div>
                </p>
            </fieldset>
            </form>
        </article>
    </section>

    <section>
        <article>
            <div class="ViewPets">
                <h1 class="ViewPetsTitle">View Pets</h1>
                <div class="Line3"></div>
                <?php
                    if ($numberOfRows >= 1){
                        echo '<img src="/imgs/paw.png" class="PawPointOne" alt=""><p class="PetOneName">' . $PetNameOne . '</p>';
                        echo '<form method="get" action="http://localhost:8888/RemovePet.php">
                                    <input type="hidden" name="ToRemove" value="' . $PetIdOne . '">
                                    <button type="submit" class="RemovePetOneButton">Remove</button>

                            </form>';

                    }
                    if ($numberOfRows >= 2){
                        echo '<img src="/imgs/paw.png" class="PawPointTwo" alt=""><p class="PetTwoName">' . $PetNameTwo . '</p>';
                        echo '<form method="get" action="http://localhost:8888/RemovePet.php">
                            <input type="hidden" name="ToRemove" value="' . $PetIdTwo . '">
                            <button type="submit" class="RemovePetTwoButton">Remove</button>
                            </form>';

                    }
                    if ($numberOfRows >=3){
                        echo '<img src="/imgs/paw.png" class="PawPointThree" alt=""><p class="PetThreeName">' . $PetNameThree . '</p>';
                            echo '<form method="get" action="http://localhost:8888/RemovePet.php">
                                    <input type="hidden" name="ToRemove" value="' . $PetIdThree . '">
                                    <button type="submit" class="RemovePetThreeButton">Remove</button>
                                </form>';
                    }

                ?>
            </div>
        </article>
    </section>

    <section>
        <article>
            <div class="ViewBookings">
                <h1 class="BookingsTitle">View Bookings</h1>
                <?php
                    $ownerid = $Id;

                    $sql = "SELECT id, date_booked, pet_name, service_type, notes, date_of_appointment, start_time, end_time, _location, _address FROM bookingform WHERE owner_id = $ownerid"; 
                    $result = $conn->query($sql) or die('dead');
                    
                    echo "<table>";
                    
                    echo "<tr><th>Date Booked</th><th>Pet Name</th><th>Service Type</th><th>Date of Appointment</th><th>Start Time</th><th>End Time</th><th>Pickup/Dropoff Location</th><th>Address (Street, Number and Postcode)</th></tr>";
                    
                    // output table data
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            //echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["date_booked"] . "</td>";
                            echo "<td>" . $row["pet_name"] . "</td>";
                            echo "<td>" . $row["service_type"] . "</td>";
                            //could make a pet minder name column using SESSION variables
                            echo "<td>" . $row["date_of_appointment"] . "</td>";
                            echo "<td>" . $row["start_time"] . "</td>";
                            echo "<td>" . $row["end_time"] . "</td>";
                            echo "<td>" . $row["_location"] . "</td>";
                            echo "<td>" . $row["_address"] . "</td>";
                            echo "</tr>";
                            $numRows += 1;
                        }
                    } else {
                        echo "<tr><td colspan='12'>No bookings available</td></tr>";
                    }
                    
                    echo "</table>";
                ?>
            </div>
        </article>


</body>
</html>

<style>

.ViewBookings{
    position: relative;
    top: -32rem;
    left: 28rem;
    max-width: 44rem;
    <?php
    echo 'height: ' . 5 + $numRows . 'rem;';
    ?>
    border-radius: 3rem;
    border: none;
    background: linear-gradient(180deg, #FFB179,#FFD7BA, #FFB179);
    background-size: 400% 400%;
    animation: NewBackground 15s ease infinite;
    font-family: "Varela Round";
    padding: 2rem 2rem;
}



</style>
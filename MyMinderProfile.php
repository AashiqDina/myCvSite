<?php
    session_start();
    include('Conn2.php');
    $Id = $_SESSION["UserId"];
    $Login = "SELECT * FROM `pmInfo` WHERE MinderId = $Id";
    $QueryRequest = mysqli_query($conn, $Login);
    $getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);
    $numberOfRows = mysqli_num_rows($QueryRequest);

    $MinderDescription = $getRow["MinderDescription"];
    $MinderLocation = $getRow["MinderLocation"];
    $MinderPrice = $getRow["Price"];

    $Location = $_POST["Location"];
    $Price = $_POST["Price"];
    $Description = $_POST["MinderDesc"];
    $PetTaxi = $_POST["JobThree"];
    $PetSitting = $_POST["JobTwo"];
    $PetWaking = $_POST["JobOne"];

    if ($_POST){

        $sql = "UPDATE `pmInfo` 
        SET `PetWalking`=$PetWaking,`PetSitting`=$PetSitting,`PetTaxi`=$PetTaxi,`MinderDescription`='$Description',`MinderLocation`='$Location',`Price`='$Price' 
        WHERE MinderId=$Id";


            if ($conn->query($sql) === TRUE) {


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
    <link rel="stylesheet" href="MyMinderProfile.css">
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
                }
            ?>
        </div>
        <div class="Line2"></div>
    </header>

    <section>
        <article>
            <form method="post" action="http://localhost:8888/MyMinderProfile.php" id="EditProf">
            <fieldset class="EditProfile">
                <p>
                    <div class="Line"></div>
                    <legend class="EditProfTitle">Edit Profile</legend>
                    <br/>
                    <input type="checkbox" class="Job1" id="OneJob" name="JobOne" value=1>
                    <input type="hidden" name="JobOne" id="OneJobHidden" value=0>
                    <label for="Job1">Pet Walking</label>
                    <br/>
                    <input type="checkbox" class="Job2" id="TwoJob" name="JobTwo" value=1>
                    <input type="hidden" name="JobTwo" id="TwoJobHidden" value=0>
                    <label for="Job2">Pet Sitting</label>
                    <br/>
                    <input type="checkbox" class="Job3" id="ThreeJob" name="JobThree" value=1>
                    <input type="hidden" name="JobThree" id="ThreeJobHidden" value=0>
                    <label for="Job3">Pet Taxi</label>
                    <br/>
                    <?php
                        echo '<input type="text" class="Location" name="Location" placeholder="' . $MinderLocation . '"><br/>';
                        echo '<input type="number" class="Price" name="Price" placeholder="' . $MinderPrice . '"><br/>';
                        echo '<textarea type="text" name="MinderDesc" placeholder="' . $MinderDescription . '" class="MinderDesc" cols="30" rows="10"></textarea><br/>';
                    ?>
                    <div>
                        <button type="submit" onclick="Check()" class="EditButton">Edit</button>
                    </div>
                </p>
            </fieldset>
            </form>
        </article>
    </section>

    <div class="ViewBookings">
                <h1 class="BookingsTitle">View Jobs</h1>
                <?php
                    $ownerid = $Id;

                    $sql = "SELECT id, date_booked, pet_name, service_type, notes, date_of_appointment, start_time, end_time, _location, _address FROM bookingform WHERE minder_id = $Id"; 
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


    <script src="MyMinderProfile.js"></script>
</body>
</html>

<style>

.ViewBookings{
    position: relative;
    top: -14rem;
    left: 24rem;
    max-width: 47rem;
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
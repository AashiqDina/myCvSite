<?php
include('Conn2.php');
session_start();;

$SearchName = $_GET["Search"];

$MinderName = array();
$MinderJobs = array();
$MinderDesc = array();
$MinderLocation = array();
$MinderPrice = array();
$MinderId = array();

if ($SearchName == NULL){

    $getMax = "SELECT MAX(MinderId) FROM pmInfo";
    $MaxId = mysqli_query($conn, $getMax);
    $rowOfId = mysqli_fetch_row($MaxId);
    $highestId = $rowOfId[0];
    $arrayIndex = 0;

    for ($i=$highestId; $i >= $highestId-2; $i--) {
        $MinderInfo = "SELECT * FROM `pmInfo` WHERE MinderId = '$i'";
        $QueryRequest = mysqli_query($conn, $MinderInfo);
        $getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);

        $MinderId[$arrayIndex] = $getRow["MinderId"];
        $MinderName[$arrayIndex] = $getRow["MinderName"];
        $temp = "| ";

        if($getRow["PetWalking"] == 1 || $getRow["PetSitting"] == 1 || $getRow["PetTaxi"]){
            if ($getRow["PetWalking"] == 1){
                $temp = $temp . 'Pet Walking | ';
            }
            if ($getRow["PetSitting"] == 1){
                $temp = $temp . 'Pet Sitting | ';
            }
            if ($getRow["PetTaxi"] == 1){
                $temp = $temp . 'Pet Taxi |';
            }
        }
        else{
            $temp = '| No services |';
        }
        $MinderJobs[$arrayIndex] = $temp;
        $MinderDesc[$arrayIndex] = $getRow["MinderDescription"];
        $MinderLocation[$arrayIndex] = $getRow["MinderLocation"];
        $MinderPrice[$arrayIndex] = '£' . $getRow["Price"];
        $arrayIndex += 1;

    }
}
else{

    $MinderInfo = "SELECT * FROM `pmInfo` WHERE `MinderName` LIKE '$SearchName%'";
    $QueryRequest = mysqli_query($conn, $MinderInfo);
    $arrayIndex = 0;

    while ($getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC)){

        $MinderId[$arrayIndex] = $getRow["MinderId"];
        $MinderName[$arrayIndex] = $getRow["MinderName"];
        $temp = "| ";

        if($getRow["PetWalking"] == 1 || $getRow["PetSitting"] == 1 || $getRow["PetTaxi"]){
            if ($getRow["PetWalking"] == 1){
                $temp = $temp . 'Pet Walking | ';
            }
            if ($getRow["PetSitting"] == 1){
                $temp = $temp . 'Pet Sitting | ';
            }
            if ($getRow["PetTaxi"] == 1){
                $temp = $temp . 'Pet Taxi |';
            }
        }
        else{
            $temp = '| No services |';
        }
        $MinderJobs[$arrayIndex] = $temp;
        $MinderDesc[$arrayIndex] = $getRow["MinderDescription"];
        $MinderLocation[$arrayIndex] = $getRow["MinderLocation"];
        $MinderPrice[$arrayIndex] = '£' . $getRow["Price"];
        $arrayIndex += 1;
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
    <link rel="stylesheet" href="/reset.css">
    <link rel="stylesheet" href="/Search.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round" />


</head>
<body>
    <header>
        <hgroup class="Title">
          <h1><a href="Homepage.php"><img src="/imgs/Logo.png" alt="Logo" class="Logo"></a></h1>
        </hgroup>
        <div class="Logo">
        </div>
        <div>
            <?php
                if(isset($_SESSION["UserId"])){
                    if($_SESSION["PetMinder"] == True){
                        echo '<div class="MyProf"><a href="/MyMinderProfile.php">My Profile<img src="/imgs/ProfileIcon.png" alt="" class="ProfLogo"></a></div>';
                    }
                    else{
                        echo '<div class="MyProf"><a href="/MyProfile.php">My Profile<img src="/imgs/ProfileIcon.png" alt="" class="ProfLogo"></a></div>';
                    }
                }
                else{
                    echo '<div class="Login"><a href="/Login.html">Login<img src="/imgs/LoginLogo.png" alt="" class="LoginLogo"></a></div>';
                }
            ?>
        </div>

        <div class="Search">
            <form method="get" action="http://localhost:8888/Search.php">
                <input type="text" placeholder="Search Minder..." name="Search" class="SearchBar">
                <button type="submit" class="SearchSubmit" name="SearchSubmit">Submit</button>
            </form>
        </div>

        <?php
            if ($arrayIndex >= 1){
                echo '
                <div class="PostOne">
                    <h6 class="TitleOne"><p>' . $MinderName[0] . '</p></h6>
                    <p class= "Jobs1">' . $MinderJobs[0] . ' </p>
                    <p class="Location1">' . $MinderLocation[0] .'</p>
                    <p class="Desc1">' . $MinderDesc[0] . ' </p>
                    <p class="Price1">' . $MinderPrice[0] . '</p>
                ';
                if(isset($_SESSION["UserId"]) && $_SESSION["PetOwner"] == true){
                    echo '
                    <form method="get" action="http://localhost:8888/makebooking.php">
                        <input type="hidden" name="BookMinder" value="' . $MinderId[0] . '">
                        <button type="submit" class="BookSubmit1" name="BookSubmit1">Book</button>
                        </form>
                        ';
                }
                else{
                }
                echo '  <div class="BoxOne"></div>
                        <div class="BoxTwo"></div>
                        <div class="BoxThree"></div>
                    ';
            }

            if ($arrayIndex >=2){
                    echo '
                    <div class="PostTwo">
                        <h6 class="TitleTwo"><p>' . $MinderName[1] . ' </p></h6>
                        <p class= "Jobs2">' . $MinderJobs[1] . ' </p>
                        <p class="Location2">' . $MinderLocation[1] . ' </p>
                        <p class="Desc2"> ' . $MinderDesc[1] . ' </p>
                        <p class="Price2"> ' . $MinderPrice[1] . ' </p>
                    ';
                    if(isset($_SESSION["UserId"]) && $_SESSION["PetOwner"] == true){
                        echo '
                        <form method="get" action="http://localhost:8888/makebooking.php">
                            <input type="hidden" name="BookMinder" value="' . $MinderId[1] . '">
                            <button type="submit" class="BookSubmit2" name="BookSubmit2">Book</button>
                        </form>
                            ';
                    }
                    else{
                    }
                    echo '  <div class="BoxFour"></div>
                            <div class="BoxFive"></div>
                            <div class="BoxSix"></div>
                        ';
                }

                if ($arrayIndex >=3){
                    echo '
                    <div class="PostThree">
                        <h6 class="TitleThree"><p>' . $MinderName[2] . ' </p></h6>
                        <p class= "Jobs3"> ' . $MinderJobs[2] . ' </p>
                        <p class="Location3"> ' . $MinderLocation[2] . ' </p>
                        <p class="Desc3"> ' . $MinderDesc[2] . ' </p>
                        <p class="Price3"> ' . $MinderPrice[2] . ' </p>
                    ';
                    if(isset($_SESSION["UserId"]) && $_SESSION["PetOwner"] == true){
                        echo '
                        <form method="get" action="http://localhost:8888/makebooking.php">
                            <input type="hidden" name="BookMinder" value="' . $MinderId[2] . '">
                            <button type="submit" class="BookSubmit3" name="BookSubmit3">Book</button>
                        </form>
                            ';
                    }
                    else{
                    }
                    echo '      <div class="BoxSeven"></div>
                                <div class="BoxEight"></div>
                                <div class="BoxNine"></div>
                        ';
                }
        ?>

    </header>
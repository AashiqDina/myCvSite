<?php

session_start();
include('Conn2.php');

$Issue = $_POST ["Issue"];
$IssueDesc = $_POST ["IssueDescription"];


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$sql = "INSERT INTO Support (Issue, IssueDesc) VALUES ('$Issue', '$IssueDesc')";
 if ($conn->query($sql) === TRUE) {

    echo "Submitted";
    header('Location: Homepage.php');
    exit;

 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
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
    <link rel="stylesheet" href="/Support.css">
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
                    <a href="/Homepage.php#JumpTo" class="Services">Services</a>
                    <a href="/Support.php" class="Support">Support</a>
                </ul>
            </nav>
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
        <div class="Line2"></div>

        <form method="post" action="http://localhost:8888/Support.php" id="LoginForm">
            <fieldset class="SupportPage">
                <p>
                    <legend class="SupportTitle">Support</legend>
                    <div class="Line"></div>
                    <br/>
                    <label for="Issue" class="IssueTitle">Issue:</label>
                    <input type="text" name="Issue" placeholder="Issue" class="Issue">
                    <br/>
                    <label for="Issue" class="IssueDescriptionTitle">Issue Description:</label>
                    <textarea type="text" name="IssueDescription" placeholder="My issue is..." class="IssueDescription" cols="30" rows="10"></textarea>
                    <br/>
                    <div>
                        <button type="submit" class="Submit">Submit</button>
                    </div>
                </p>
            </fieldset>
        </form>
        <div class="BoxOne"></div>
        <div class="BoxTwo"></div>
        <div class="BoxThree"></div>
    </header>
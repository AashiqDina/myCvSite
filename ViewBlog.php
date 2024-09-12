<?php
include('Conn.php');
session_start();

global $StoredIdOne;
global $StoredTitleOne;
global $StoredTextOne;
global $StoredTimeOne;
global $StoredNameOne;
global $StoredIdTwo;
global $StoredTitleTwo;
global $StoredTextTwo;
global $StoredTimeTwo;
global $StoredNameTwo;
global $StoredIdThree;
global $StoredTitleThree;
global $StoredTextThree;
global $StoredTimeThree;
global $StoredNameThree;

$Title = [];
$BodyText = [];
$DateTime = [];
$Name = [];

$getMax = "SELECT MAX(BlogId) FROM TheBlog";
$MaxId = mysqli_query($conn, $getMax);
$rowOfId = mysqli_fetch_row($MaxId);
$highestId = $rowOfId[0];

for ($i=1; $i < $highestId + 1; $i++) {
  $BlogPosts = "SELECT * FROM `TheBlog` WHERE BlogId = '$i'";
  $QueryRequest = mysqli_query($conn, $BlogPosts);
  $getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);

  array_unshift($Title, $getRow["Title"]);
  array_unshift($BodyText, $getRow["BodyText"]);
  array_unshift($DateTime, $getRow["DateAndTime"]);

  $UserID = $getRow["UserId"];

  $OP = "SELECT * FROM `USERS` WHERE ID = '$UserID'";
  $QueryRequest2 = mysqli_query($conn, $OP);
  $getRow2 = mysqli_fetch_array($QueryRequest2, MYSQLI_ASSOC);

  $FullName = $getRow2["firstName"] . " " . $getRow2["lastName"];

  array_unshift($Name, $FullName);
}
?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aashiq Dina - Homepage</title>
 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="ViewBlog.css">
 
</head>
<body>
<header class="HeaderContainer">

<a href="Index.php">
    <h1 class="Title"> Aashiq Dina </h1>
</a>

<div class="container">
    <nav>
        <ul class="Links">
            <li><a href="AboutMe.php">About Me</a></li>
            <li><a href="Education.php">Education</a></li>
            <li><a href="Experience.php">Experience</a></li>
            <li><a href="Skills.php">Skills</a></li>
            <li><a href="Project.php">Projects</a></li>
            <li><a href="Other.php">Other</a></li>
        </ul>
    </nav>
</div>


<?php
    if (isset($_SESSION['UserID'])):
?>
<a href="Settings.php"><p id="DisplayedUserName" class="LoginIcon"><?php echo $_SESSION['FirstName'] . " " . $_SESSION['LastName'];?></p></a>

<?php else: ?>
    <div class="LoginIcon">
        <a href="Login.html"><img class="TheLoginIconImage" src="Assets/UserIcon.png"></a>
    </div>
<?php
    endif;
?>

</header>
    <form method="get" action="http://localhost:8888/TheBlog.php" id="BlogForm">
        <fieldset class="AddBlog">
            <legend class="BlogTitle">Add Blog</legend>
            <p>
                <input type="text" id="BlogTitle" name="Title" placeholder="Title" class="InputTitle">
                <br>
                <br>
                <textarea name="UserText" cols="18" id="BlogText" placeholder="Enter your text here" class="InputText"></textarea>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <button type="submit" id="submitButton" onclick="submitForm" class="LoginButton">Post</button>
                        </div>
                        <div class="col">
                            <button type="button" id="clearButton" onclick="ConfirmClear()" class="ClearButton">Clear</button>
                            </div>
                        </div>
                    </div>
            </p>
        </fieldset>
    </form>
    <script src="Post.js"></script>

    <?php
     for($i=0; $i<$highestId; $i++){
        if($i == 0){
            $Dist = 7;
        }
        else{
            $Dist = (5 * $i) + 5;
        }
        ?>
        <div class="<?php echo "Blog" . $i;?>">
            <h6 class="<?php echo "Title" . $i;?>"> <?php echo $Title[$i]; ?> </h6>
            <p class="<?php echo "BodyText" . $i;?>"> <?php echo $BodyText[$i]; ?> </p>
            <p class="<?php echo "DateTime" . $i;?>"> <?php echo "(" . $Name[$i] . " - " . $DateTime[$i] . ")"; ?> </p>
         </div>

         <style>
            <?php echo ".Blog" . $i;?>{
                position: relative;
                top: <?php echo $Dist . "rem"?>;
                color: white;
                box-shadow: 0rem 0.3rem;
                width: 90%;
                height: 10rem;
                margin: 0 auto;
                border-radius: 10rem;
                animation-name: BodyBackground;
                animation-duration: 10s;
                animation-iteration-count: infinite;
                animation-direction: alternate;
            }
            <?php echo ".Title" . $i;?>{
                position: relative;
                margin: 0 auto;
                font-size: 2.5rem;
                text-align: center;
            }

            <?php echo ".BodyText" . $i;?>{
                position: relative;
                margin: 0 auto;
                font-size: 1.5rem;
                text-align: center;
            }
            <?php echo ".DateTime" . $i;?>{
                position: relative;
                margin: 0 auto;
                font-size: 1rem;
                text-align: center;
            }

            @keyframes BodyBackground {
                from {
                        background-color: rgb(26, 29, 33);
                    }
                to   {
                        background-color: rgb(33, 30, 40);
                    }
            }
         </style>
        <?php
     }
    ?>
</body>
</html>

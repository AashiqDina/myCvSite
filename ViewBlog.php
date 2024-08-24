<?php
include('Conn.php');

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

$getMax = "SELECT MAX(BlogId) FROM TheBlog";
$MaxId = mysqli_query($conn, $getMax);
$rowOfId = mysqli_fetch_row($MaxId);
$highestId = $rowOfId[0];

for ($i=1; $i < $highestId + 1; $i++) {
  $BlogPosts = "SELECT * FROM `TheBlog` WHERE BlogId = '$i'";
  $QueryRequest = mysqli_query($conn, $BlogPosts);
  $getRow = mysqli_fetch_array($QueryRequest, MYSQLI_ASSOC);

    $StoredTitleThree = $StoredTitleTwo;
    $StoredTextThree = $StoredTextTwo;
    $StoredTimeThree = $StoredTimeTwo;
    $StoredNameThree = $StoredNameTwo;
    $StoredIdThree = $StoredIdTwo;

    $StoredTitleTwo = $StoredTitleOne;
    $StoredTextTwo = $StoredTextOne;
    $StoredTimeTwo = $StoredTimeOne;
    $StoredNameTwo = $StoredNameOne;
    $StoredIdTwo = $StoredIdOne;

    $StoredTitleOne = $getRow["Title"];
    $StoredTextOne = $getRow["BodyText"];
    $StoredTimeOne = $getRow["DateAndTime"];
    $StoredNameOne = $getRow["Name"];
    $StoredIdOne = $getRow["Id"];
    
    if ($StoredNameOne == null) {
      $StoredNameOne = "Anonymous";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog's Posts</title>
    <link rel="stylesheet" href="/Applications/MAMP/htdocs//reset.css">
    <link rel="stylesheet" href="/Applications/MAMP/htdocs//ViewBlog.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="ViewBlog.css">
</head>
<body>
    <header>
        <hgroup class="Title">
            <h1><a href="Index.php">Aashiq Dina</a></h1>
        </hgroup>
        <div class="Logo">
            <figure>
                <a href="Index.php">
                    <img src="Images/Logo.png" alt="Logo" width="90px">
                </a>
            </figure>
        </div>
        <div class="Links">
            <nav>
                <ul>
                    <a href="AboutMe.html"> About Me&nbsp;&nbsp;&nbsp;</a>
                    <a href="Experience.html">Experience&nbsp;&nbsp;&nbsp;</a>
                    <a href="Education.html">Education&nbsp;&nbsp;&nbsp;</a>
                    <a href="Skills.html">Skills&nbsp;&nbsp;&nbsp;</a>
                    <a href="Projects.html">Projects&nbsp;&nbsp;&nbsp;</a>
                    <a href="LogOut.php" class="LogOut">Log Out</a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="AddBlog">
        <a href="Blog.html" class="Redirect">Add Blog</a>
    </div>
    <div class="BlogOne">
      <h6 class="TitleOne"> <?php echo $StoredTitleOne; ?> </h6>
      <p> <?php echo $StoredTextOne; ?> </p>
      <p> <?php echo "-" . $StoredNameOne; ?> </p>
      <p> <?php echo "(" . $StoredTimeOne . ")"; ?> </p>
    </div>
    <div class="BlogTwo">
      <h6 class="TitleOne"> <?php echo $StoredTitleTwo; ?> </h6>
      <p> <?php echo $StoredTextTwo; ?> </p>
      <p> <?php echo "-" . $StoredNameTwo; ?> </p>
      <p> <?php echo "(" . $StoredTimeTwo . ")"; ?> </p>

    </div>
    <div class="BlogThree">
      <h6 class="TitleOne"> <?php echo $StoredTitleThree; ?> </h6>
      <p> <?php echo $StoredTextThree; ?> </p>
      <p> <?php echo "-" . $StoredNameThree; ?> </p>
      <p> <?php echo "(" . $StoredTimeThree . ")"; ?> </p>
    </div>
</body>
</html>

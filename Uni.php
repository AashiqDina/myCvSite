<?php

session_start();

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
    <link rel="stylesheet" href="Uni.css">
 
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

    <section>
        <article>
                <h1 class="Welcome">
                    University
                </h1>
        </article>
    </section>

    <aside>
        <div class="LinksContainer2">
            <h2 class="University2">Bachelor of Science with Honours, 
            </br> Second Class (Upper Division) 
            </br> in Computer Science (69.7%)
            </br> </br> 
            ________________________________________________
            </br> 
            </br> Procedural Programming - B (64%) || Computer Systems and Networks - A (81.2%) || Logic and Discrete Structures - A (74.7%) || Object-Oriented Programming - B (67.4%) || Fundamentals of Web Technology - A (81.8%) || Information System Analysis - B (65%) || Automata and Formal Languages - A (77.3%) || Professional and Research Practice - A (88.3%) ||
            Software Engineering - A (73.6%) || Software Engineering Project - A (73.2%) || Probability and Matricies - (73%) || Operating Systems - A (76.2%) || Database Systems - B (63.1%) || Graphical User Interface - A (81.4%) || Internet Protocols and Applications - A (94.1%) || Algorithms and Data Structures - A (82.1%)
            Computer Graphics - C (59.9%) || Project - B (61.7%) || Bayesian Decision and Risk Analysis - B (60.1%) || Computability, Complexity and Algorithms - A (70.8%) || Multi-Platform Game Development - A (72.2%) || Neural Networks and Deep Learning - C (54%) || User Experience Design - A (81.3%)
        </h2>
        </div>
    </aside>


</body>
</html>

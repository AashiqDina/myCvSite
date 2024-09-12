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
    <link rel="stylesheet" href="Experience.css">
 
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
                    Experience
                </h1>
        </article>
    </section>

    <aside>
        <div class="LinksContainer">
            <h2 class="GCSEs">2018, I worked at a design agency called Reluctantly Brave, where I collaborated with a team to develop a new product. Unfortunately, I am unable to provide further details due to a non-disclosure agreement (NDA) I signed during my time there.</h2>
            <!-- <h2 class="ALevels">TBD</h2> -->
            <!-- <h2 class="University">TBD</h2> -->
        </div>
    </aside>

    <aside>
        <div class="LinksContainer2">
            <!-- <h2 class="GCSEs2">TBD</h2>
            <h2 class="ALevels2">TBD</h2>
            <h2 class="University2">TBD</h2> -->
        </div>
    </aside>

</body>
</html>

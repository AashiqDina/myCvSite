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
    <link rel="stylesheet" href="cgProject.css">
 
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
                Computer Graphics Projects
            </h1>
            
            <p class="Text">
            Click on the buttons below to explore some of my computer graphics projects.

            </p>
        </article>
    </section>

    <aside>
        <div class="LinksContainer">
            <a href="/Computer_Graphics_lab_1/FinalVersionOfAllCode/A/rotating-square.html" class="LinkedIn">Project I</a>
            <a href="/Computer_Graphics_lab_1/FinalVersionOfAllCode/B/colour-hexagon.html" class="Blog">Project II</a>
            <a href="/Computer_Graphics_lab_1/FinalVersionOfAllCode/C/colour-spiral.html" class="Github">Project III</a>
        </div>
    </aside>

    <aside>
        <div class="LinksContainer">
            <a href="/Computer_Graphics_lab_2/FinalVersionOfAllCode/A/transforming-square.html" class="LinkedIn2">Project IV</a>
            <a href="/Computer_Graphics_lab_2/FinalVersionOfAllCode/B/projection.html" class="Blog2">Project V</a>
            <a href="/Computer_Graphics_lab_2/FinalVersionOfAllCode/C/projection.html" class="Github2">Project VI</a>
        </div>
    </aside>

    <aside>
        <div class="LinksContainer">
            <a href="/Computer_Graphics_lab_3/FinalVersionOfAllCode/A/lighting.html" class="LinkedIn3">Project VII</a>
            <a href="/Computer_Graphics_lab_3/FinalVersionOfAllCode/B/lighting.html" class="Blog3">Project VIII</a>
            <a href="/Computer_Graphics_lab_3/FinalVersionOfAllCode/C/lighting.html" class="Github3">Project IX</a>
            <a href="/Computer_Graphics_lab_3/FinalVersionOfAllCode/D/lighting.html" class="Github3">Project X</a>
        </div>
    </aside>

    <aside>
        <div class="LinksContainer">
            <a href="/Computer_Graphics_lab_4/FinalVersionOfAllCode/A/texture.html" class="LinkedIn4">Project XI</a>
            <a href="/Computer_Graphics_lab_4/FinalVersionOfAllCode/B/environment.html" class="Blog4">Project XII</a>
            <a href="/Computer_Graphics_lab_4/FinalVersionOfAllCode/C/environment.html" class="Github4">Project XIII</a>
            <a href="/Computer_Graphics_lab_4/FinalVersionOfAllCode/D/environment.html" class="Github4">Project XIV</a>
        </div>
    </aside>


</body>
</html>

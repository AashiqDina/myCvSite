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
    <link rel="stylesheet" href="Index.css">
 
</head>

<body>
    <header class="HeaderContainer">

        <a href="Index.php">
            <h1 class="Title"> Aashiq Dina </h1>
        </a>

        <div class="container">
            <nav>
                <ul class="Links">
                    <li><a href="">About Me</a></li>
                    <li><a href="">Education</a></li>
                    <li><a href="">Experience</a></li>
                    <li><a href="">Skills</a></li>
                    <li><a href="">Projects</a></li>
                </ul>
            </nav>
        </div>


        <?php
            if (isset($_SESSION['UserID'])):
        ?>
        <p class="LoginIcon"><?php echo $_SESSION['FirstName'] . " " . $_SESSION['LastName'];?></p>
        <?php else: ?>
            <div class="LoginIcon">
                <a href="Login.html"><img class="LoginIconImage" src="Assets/UserIcon.png"></a>
            </div>
        <?php
            endif;
        ?>

    </header>

    <section>
        <article>
            <h1 class="Welcome">
                WELCOME
            </h1>
            
            <p class="Text">
                This website showcases my journey and achievements, built entirely using my web development skills.
                Explore my education, skills, experience, and more to learn about my background and expertise. Thank you for visiting!

            </p>
        </article>
    </section>

    <aside>
        <div class="LinksContainer">
            <a href="https://www.linkedin.com/in/aashiq-dina-339842227/" class="LinkedIn">My LinkedIn</a>
            <a href="ViewBlog.php" class="Blog">Blog</a>
            <a href="https://github.com/AashiqDina" class="Github">My Github</a>
        </div>
    </aside>


</body>
</html>

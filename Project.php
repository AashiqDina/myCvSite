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
    <link rel="stylesheet" href="Project.css">
 
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
                    Project
                </h1>
        </article>
    </section>

    <div class="container2">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Final Year Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">For my final year project, I developed an IOS application designed to replicate a complete school system. The app included features like Engagement tracking, shared content, and gamified elements, simulating a real-world educational environment.</p>
        </div>
    </div>
</div>
<a href="Homepage.php">
<div class="container3">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Second Year Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">During my second year, I collaborated with a team to develop a pet service website. You can explore the project by clicking here.
            </p>
        </div>
    </div>
</div>
</a>

<div class="container4">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Neural Networks Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am experienced in JavaScript, with a strong ability to create dynamic and interactive web applications. I enjoy using JavaScript to enhance user experiences and bring creative ideas to life.</p>
        </div>
    </div>
</div>

<div class="container5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Computer Graphics Work</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have a strong foundation in HTML, allowing me to structure web content effectively and create well-organized, responsive layouts. I use HTML to build clean, accessible, and user-friendly websites as seen.</p>
        </div>
    </div>
</div>

<a href="https://aashiqdina.github.io/Group_Y_GameProjectBuild/build/index.html">
    <div class="container6">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Game Development Project</h1>
            </div>
            <div class="col-md-6 text-md-right">
                <p class="text">I am proficient in CSS, with the ability to design visually appealing and responsive websites. I use CSS to create clean, modern layouts and ensure seamless user experiences across different devices. This is done using my skills with Bootstrap too.</p>
            </div>
        </div>
    </div>
</a>

<div class="container7">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Object Oriented Programming Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have strong skills in PHP, allowing me to build dynamic, server-side applications. I use PHP to develop efficient backend systems and integrate databases, ensuring smooth functionality for web applications.</p>
        </div>
    </div>
</div>

<div class="container8">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">OS Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have a solid understanding of C programming, with experience in writing efficient, low-level code. I use C to develop performance-driven applications and work closely with system resources for optimized solutions.</p>
        </div>
    </div>
</div>
<div class="container9">
    <div class="row">
        <div class="col-md-6">
             <h1 class="title">GUI Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am experienced in C#, with experience in building robust applications using object-oriented programming principles. I enjoy using C# to develop scalable software solutions, particularly in the .NET framework.</p>
        </div>
    </div>
</div>

<div class="container10">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Database Project</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">
            I also have skills in GLSL, allowing me to write efficient shaders for real-time graphics rendering. I enjoy using GLSL to create visually striking effects and optimize performance in 3D graphics applications.</p>
        </div>
    </div>
</div>

<?php
    $NumberOfSkills = 9;

    for($i=0; $i<$NumberOfSkills; $i++){
        ?>
        <style>

            <?php echo ".container" . ($i + 2);?>{
                position: relative;
                top: <?php echo (10 + ($i * 2)); ?>rem;
                animation-name: BodyBackground;
                animation-duration: 10s;
                animation-iteration-count: infinite;
                animation-direction: alternate;
                color: azure;
                padding: 1rem 3.5rem;
                border-radius: 5rem;
                font-size: 1.2rem;
                box-shadow: 0rem 0.3rem;
                font-family: "Gill Sans", sans-serif;
            }

        </style>
        <?php
    }
?>

</body>
</html>

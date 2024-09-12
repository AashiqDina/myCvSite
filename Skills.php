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
    <link rel="stylesheet" href="Skills.css">
 
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
                    Skills
                </h1>
        </article>
    </section>

<div class="container2">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Python</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am proficient in Python programming, with strong problem-solving skills and experience in developing efficient, clean code. I enjoy using Python to tackle complex challenges and build innovative solutions.</p>
        </div>
    </div>
</div>

<div class="container3">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Java</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have solid expertise in Java programming, with a focus on building robust, scalable applications. My experience includes working with object-oriented principles to create efficient and maintainable solutions.</p>
        </div>
    </div>
</div>

<div class="container4">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">JavaScript</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am experienced in JavaScript, with a strong ability to create dynamic and interactive web applications. I enjoy using JavaScript to enhance user experiences and bring creative ideas to life.</p>
        </div>
    </div>
</div>

<div class="container5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">HTML</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have a strong foundation in HTML, allowing me to structure web content effectively and create well-organized, responsive layouts. I use HTML to build clean, accessible, and user-friendly websites as seen.</p>
        </div>
    </div>
</div>

<div class="container6">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">CSS</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am proficient in CSS, with the ability to design visually appealing and responsive websites. I use CSS to create clean, modern layouts and ensure seamless user experiences across different devices. This is done using my skills with Bootstrap too.</p>
        </div>
    </div>
</div>

<div class="container7">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">PHP</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have strong skills in PHP, allowing me to build dynamic, server-side applications. I use PHP to develop efficient backend systems and integrate databases, ensuring smooth functionality for web applications.</p>
        </div>
    </div>
</div>

<div class="container8">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">C</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have a solid understanding of C programming, with experience in writing efficient, low-level code. I use C to develop performance-driven applications and work closely with system resources for optimized solutions.</p>
        </div>
    </div>
</div>

<div class="container9">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">C#</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am experienced in C#, with experience in building robust applications using object-oriented programming principles. I enjoy using C# to develop scalable software solutions, particularly in the .NET framework.</p>
        </div>
    </div>
</div>

<div class="container10">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">GLSL</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">
            I also have skills in GLSL, allowing me to write efficient shaders for real-time graphics rendering. I enjoy using GLSL to create visually striking effects and optimize performance in 3D graphics applications.</p>
        </div>
    </div>
</div>

<div class="container11">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">SQL</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am proficient in SQL, with experience in designing and managing databases. I use SQL to write efficient queries for data retrieval, manipulation, and optimization, ensuring robust and well-structured database systems.</p>
        </div>
    </div>
</div>

<div class="container12">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Design</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have strong design skills, with a keen eye for creating visually engaging and user-friendly interfaces. I excel in combining creativity with functionality to deliver aesthetically pleasing and effective design solutions.</p>
        </div>
    </div>
</div>

<div class="container13">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Database Management</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am skilled in database management, with experience in designing, implementing, and maintaining robust database systems. I focus on ensuring data integrity, optimizing performance, and managing complex queries to support efficient data handling and retrieval.</p>
        </div>
    </div>
</div>

<div class="container14">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Procedural Programming</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am experienced in procedural programming, with a strong ability to write clear, structured code that focuses on functions and procedures. I use procedural programming to develop efficient, maintainable solutions by breaking down complex problems into manageable tasks.</p>
        </div>
    </div>
</div>

<div class="container15">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Object-Oriented Programming</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am proficient in object-oriented programming (OOP), with a solid understanding of concepts such as classes, inheritance, and polymorphism. I use OOP principles to design modular, reusable, and maintainable code, creating well-structured software solutions.</p>
        </div>
    </div>
</div>

<div class="container16">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Algorithms</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I have a strong grasp of algorithms, with the ability to develop and implement efficient solutions for complex problems. I focus on optimizing performance and ensuring effective problem-solving through well-designed algorithms and data structures.</p>
        </div>
    </div>
</div>

<div class="container17">
    <div class="row">
        <div class="col-md-6">
            <h1 class="title">Data Structures</h1>
        </div>
        <div class="col-md-6 text-md-right">
            <p class="text">I am well-versed in data structures, with experience in choosing and implementing the most appropriate structures for various applications. I use data structures to optimize data storage, retrieval, and manipulation, ensuring efficient and scalable solutions.</p>
        </div>
    </div>
</div>

<?php
    $NumberOfSkills = 16;

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

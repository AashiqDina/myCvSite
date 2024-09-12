<?php
    session_start();
    $AboutUs = "At Paw Care, we're passionate about providing the best possible care for your pets. Our experienced team of pet professionals
        is committed to ensuring your furry friends receive the attention, love, and care they deserve. Whether you need regular dog walks or pet minding
        while you're away, we're here to help. Trust us to treat your pets like family and give them the care they need to thrive."

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw Care</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="Homepage.css">
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
                    <a href="#JumpTo" class="#Services">Services</a>
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
                    echo '<div class="Login"><a href="/LoginPawCare.html">Login<img src="/imgs/LoginLogo.png" alt="" class="LoginLogo"></a></div>';
                }
            ?>
        </div>
        <div class="Line2"></div>
    </header>
    
    <section>
        <div>
            <img src="/imgs/DogTwo.png" class="DogTwo" alt="">
            <img src="/imgs/DogThree.png" class="DogThree" alt="">
        </div>
    </section>

    <section>
        <article>
            <?php
                if(isset($_SESSION["UserId"])){
                    echo '<h1 class="WelcomeName">Welcome &#10;&#13;' . $_SESSION["UserName"] .  '!' . '</h1>';
                }
                else{
                    echo '<div class="AboutUs"><h1>About Us</h1><p class="auDescription">' . $AboutUs . '</p></div>';
                }
            ?>
        </article>
        <!--
            </section>
                    <article>
                        <h3 class="ServicesTitle" id="JumpTo">
                            Services
                        </h3>
                        <div class="Line"></div>
                        <div>
                           <img src="imgs/Paw.png" alt="Pae" class="PawIcon"> 
                           <p class="dwTitle">
                            Dog Walking
                           </p>
                           <p class="dwDescription">
                                Your dog gets walked by one of our carers around your local area, 
                                giving your dog an enjoyable day out without needing to get out yourself.
                           </p>
                           <img src="imgs/DogSittingIcon.png" alt="DogSittingIcon" class="dsIcon">
                           <p class="dsTitle">
                            Dog Sitting 
                           </p>
                           <p class="dsDescription">
                                Your go will be looked after by one of out carers in your local area,
                                allowing you to do whatever you want during your requested period of time.
                           </p>
                           <img src="imgs/TaxiIcon.png" alt="PetTaxiIcon" class="ptIcon">
                           <p class="ptTitle">
                            Pet Taxi
                           </p>
                           <p class="ptDescription">
                                Your go will be looked after by one of out carers in your local area,
                                allowing you to do whatever you want during your requested period of time.
                           </p>
                        </div>
                    </article>
                </section>
                    <article>
                        <h3 class="ServicesTitle" id="JumpTo">
                            Services
                        </h3>
                        <div class="Line"></div>
                        <div>
                           <img src="imgs/Paw.png" alt="Pae" class="PawIcon"> 
                           <p class="dwTitle">
                            Dog Walking
                           </p>
                           <p class="dwDescription">
                                Your dog gets walked by one of our carers around your local area, 
                                giving your dog an enjoyable day out without needing to get out yourself.
                           </p>
                           <img src="imgs/DogSittingIcon.png" alt="DogSittingIcon" class="dsIcon">
                           <p class="dsTitle">
                            Dog Sitting 
                           </p>
                           <p class="dsDescription">
                                Your go will be looked after by one of out carers in your local area,
                                allowing you to do whatever you want during your requested period of time.
                           </p>
                           <img src="imgs/TaxiIcon.png" alt="PetTaxiIcon" class="ptIcon">
                           <p class="ptTitle">
                            Pet Taxi
                           </p>
                           <p class="ptDescription">
                                Your go will be looked after by one of out carers in your local area,
                                allowing you to do whatever you want during your requested period of time.
                           </p>
                        </div>
                    </article>
            -->
                </section>

    <section>
        <article>
            <h3 class="ServicesTitle" id="JumpTo">Services</h3>
            <div class="Line"></div>
            <div class="DogWalkingSection">
                <img class="pwBase" src="/imgs/Doggo-PW.png" alt="">
                <p class="dwTitle">
                    Pet Walking
                </p>
                <p class="dwDescription">
                    Your dog gets walked by one of our carers around your local area, 
                    giving your dog an enjoyable day out without needing to get out yourself.
               </p>
            </div>
            <div class="PetSittingSection">
                <img class="psBase" src="/imgs/Kitty-PS.png" alt="">
                <p class="dsTitle">
                    Pet Sitting
                </p>
                <p class="dsDescription">
                    Your go will be looked after by one of out carers in your local area,
                    allowing you to do whatever you want during your requested period of time.
               </p>
            </div>
            <div class="PetTaxiSection">
                <img class="ptBase" src="/imgs/Doggo-PT.png" alt="">
                <p class="ptTitle">
                    Pet Taxi
                </p>
                <p class="ptDescription">
                     Your go will be looked after by one of out carers in your local area,
                     allowing you to do whatever you want during your requested period of time.
               </p>
            </div>
        </article>
    </section>

    <aside>
    </aside>


</body>
</html>

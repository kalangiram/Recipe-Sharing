<?php session_start() ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Navigation Bar</title>

            <link href="navigation.css" rel="stylesheet">
            <link href='dropdown.css' rel='stylesheet'>
        <style>
        body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        background-image: url("photos/about.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;

    }
    .a{
        display: flex;
        flex-direction: row;
        gap: 7px;
        margin-left: 35px;
        margin-top: 45px;
    }
    .a div{
        background-color: #f0f0f0;
        width: 190px;
        height: 350px;
        border-radius: 15px;
        background-image: linear-gradient(rgb(178, 118, 128),rgb(219, 219, 216));
        padding: 10px;
    }
    .a div h1{
        text-align: center;
        color: rgb(185, 19, 211);
        font-weight: bold;
        text-shadow: 2px 2px #0505e3;
        text-decoration: underline  red;

    }
    .justforu img{
        padding:10px;
        border-radius: 16px;
    }
    .justforu img:hover{
        transform: scale(0.9);
        transition-duration: 0.3s;
    }
    .justforu{
        margin-left: 70px;
        margin-right: 70px;
        background-color: lightslategray;
        padding-left: 70px;
       padding-bottom: 40px;
       padding-top: 20px;
    }


        </style>
    </head>
    <body>
        <nav class="navbar" >
        <div class="logo">
            <a href="index.php"><kk style="color: pink;">Food</kk> <span style="color: green;">Gram</span></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            
               <?php
                    if(isset($_SESSION['username'])) {
                        // User is logged in
                        echo '<div class="dropdown">
                                <a href="#" class="dropbtn">profile</a>
                                <div class="dropdown-content">
                                    <a href="aboutme.php">';

                        if(isset($_SESSION['username'])) {
                            echo $_SESSION['username'];
                        }

                        echo '</a><br>
                                    <a href="inner.php">Go In---></a><br>
                                    <a href="logout.php">Logout</a><br>
                                </div>
                              </div>';
                    } else {
                        // User is not logged in
                        echo '<li><a href="signin.php">SignIn</a></li>
                              <li><a href="signupform.php">SignUp</a></li>';
                    }
                    ?>
                    <li><a href="help.php">Help</a></li>   
        </ul>
    </nav>
        <div>
            <h1 style="margin-left: 15px; color:cyan;">About Food Gram:</h1>
        </div>
        <div class="a">
            <div>
                <h1>Vision:</h1>
                <p>Our vision is to create a dynamic online hub that brings together food enthusiasts from around the world, providing a platform for sharing, discovering, and celebrating the art of cooking and culinary traditions.</p>
            </div>
            <div>
                <h1>Mission:</h1>
                <p>We are committed to building a user-centric recipe sharing website that empowers individuals to showcase their culinary creativity, learn from one another, and promote a sense of unity through the universal language of food.</p>
            </div>
            <div>
                <h1>Objective:</h1>
                <p>1) Facilitate seamless recipe sharing, encouraging a diverse range of cooks to showcase their skills and creations.</p>
                <p>2) Cultivate a global community where users can learn, adapt, and appreciate different cooking styles and ingredients.</p>
            </div>
        </div>
        <br><br><br>
        <div style=" margin-left: 55px; margin-top: 199px; text-align: center;">
            <h1 style="color:darkmagenta;text-shadow: 2px 2px 2px 2px;">Just For U</h1>
        </div>
        <div class="justforu">
            <a href="signupform.php"><img src="just/just1.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just2.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just3.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just4.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just5.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just6.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just7.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just8.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just9.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just10.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just11.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just12.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just13.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just14.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just15.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just16.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just17.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just18.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just19.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just21.png" alt="Click me" height="300px" width="300px"></a>
            <a href="signupform.php"><img src="just/just20.png" alt="Click me" height="300px" width="300px"></a>
          </div>  
        <?php
        
    ?>

    </body>
    </html>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php session_start() ?>
<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navigation Bar</title>
        <link href="navigation.css" rel="stylesheet">
        <link href="slides.css" rel="stylesheet">
        <link href="dropdown.css" rel="stylesheet">
    <style>
.background{
  margin-bottom: 100px;
  background-image: url("photos\back_ground.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    width: 100%;
}


.text
{
   
  background-image: linear-gradient(90deg,rgb(0, 225, 255),rgb(89, 219, 89));
  padding:20px;
  border-radius: 17px;
  margin-right: 120px;
    
}
.text h1{
    font-size: 30px;
    font-weight: bold;
    color:rgb(224, 82, 16);
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
                    <li><a href="signin.php">admin</a></li>

            
            
            
        </ul>
    </nav>
<div class="background">
    <div class="slideshow-container" style="margin-top: 50px;">
      <div class="mySlides fade">
        <img src="photos/p1img5.jpg" style="width:80%">
      </div>
      
      <div class="mySlides fade">
        <img src="photos/p1img2.jpg" style="width:80%">
      </div>
      
      <div class="mySlides fade">
        <img src="photos/p1img3.jpg" style="width:80%">
      </div>
      
      <div class="mySlides fade">
          <img src="photos/p1img4.jpg" style="width:80%;">
        </div>
      
      <div class="mySlides fade">
          <img src="photos/p1img1.jpg" style="width:80%">
        </div>
    </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span> 
        </div>
</div> 

<div class="text" style="display: flex;flex-direction: row; justify-content: center;text-align: center;margin-left: 90px;" >
  <div>
  <h1>India's Largest Food Gram Platform</h1>
  <p>Connecting cokking tips Seekers with tips and processes Providers.</p>
  <button id="but" type="submit">Know more About this platform ➡️</button><br><br>
  <p>To access the platform please Register:</p>
  <button id="sign" type="submit">click to <spa style="color: darkorange">SignUp</spa> ➡️</button><br>
  </div>
  <div><img src="photos/chef.png"></div>
</div>

      <script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}


        document.getElementById("but").addEventListener("click", function() {
            window.location.href = "about.php"; // Replace with the desired URL
        });

        document.getElementById("sign").addEventListener("click", function() {
            window.location.href = "signupform.php"; // Replace with the desired URL
        });
    </script>
</body>
</html>

        <?php
        // put your code here
        ?>
    </body>
</html>

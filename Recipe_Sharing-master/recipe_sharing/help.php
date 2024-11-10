
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navigation.css">
</head>
<style>
    .main{
        background-image: url("photos/help.jpeg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        
    }
    .text {
/*  color: #000000;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;*/
    margin-top: 30vh;
    align-items: center;
    background-color: lightcyan;
    width:60%;
    margin-left: 100px;
    padding:20px;
}
</style>
<body>
<div class="main">
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
            
            
        </ul>
    </nav>
    <center>
    <div class="text" >
    
    <h1>Regarding any type of information related to this website:</h1>
    <p>Text the query to this mail given below:</p>
    <p><spa style="color:darkorange">sudhakiran0308@gmail.com </spa></p>
    <p>you can even contact this below number:</p>
    <p> <spa style="color: darkorange">9618616382</spa><p>
    </div>
        </center>
</div>
     </body>
</html>

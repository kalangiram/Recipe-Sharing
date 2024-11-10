<?php
session_start(); // You need to start the session to use $_SESSION

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="navigation.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            background-image: url("photos/welcome.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><kk style="color: pink;">Food</kk> <span style="color: green;">Gram</span></a>
        </div>
        <ul class="nav-links">
            <li><a href="sharebyu.php">Share by You</a></li>
            <li><a href="retrive.php">Share List</a></li>
            
            <li>
                <div class="dropdown">
                    <a href="#" class="dropbtn">profile</a>
                    <div class="dropdown-content">
                        <!-- <a href="posts.html">posts</a><br> -->
                        <a href="aboutme.php"> <?php 
                            if(isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            }
                            ?>
                        </a><br>
                        <a href="addpost.php">Share post</a><br>
                        <a href="logout.php">Logout</a><br>
                    </div>
                </div>
            </li>
<!--            <li><a href="admin.php">see accounts</a><br></li>-->
<!--            <li><a href="wishlist.php">Wishlist</a></li>-->
            <li><a href="help2.php">Help</a></li>
        </ul>
    </nav>
</body>
</html>

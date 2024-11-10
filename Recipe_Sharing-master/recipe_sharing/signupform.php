<?php session_start();

// Check if the user is already logged in, redirect to home.php if so
if (isset($_SESSION['username'])) {
    header("Location: inner.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="navigation.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
    <title>Sign Up and Sign In</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image:url("photos/signup.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;
            padding:20px;
        }

        .form-container {
            border-radius: 19px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 10px;
            text-align: center;
            margin-bottom: 10px;
            backdrop-filter:blur(10px);
            width:20%;
        }

        .form-container h1,.header h1 {
            margin-bottom: 5px;
            text-shadow: 2px 2px #e3d105;
            color:#a2091b
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .header {
            height: 80px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="index.html"><kk style="color: pink;">Food</kk> <span style="color: green;">Gram</span></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="help.php">Help</a></li>
        </ul>
    </nav>
    <div class="header">
        <img src="photos/logo.png" width="80px" height="70px" id="logo">
        <marquee direction="right" width="80%" class="a">
            <h1>Online Food Recipe</h1>
        </marquee>
    </div>
    <div class="container" ng-app="myApp" ng-controller="UserController">
        <div class="form-container">
            <h1>Sign Up</h1>
            <form ng-submit="submitForm()" id="myForm" action="signupDB.php" method="post">
                <input type="text" name="username" placeholder="Username" ng-model="name" ng-model-options="{ updateOn: 'default blur', debounce: { default: 300, blur: 0 } }" ng-change="validateName()" required>
                <span style="color: red;" ng-show="error1">{{error1}}</span><br>
                <input type="password" name="password" placeholder="Password" ng-model="password" ng-model-options="{ updateOn: 'default blur', debounce: { default: 300, blur: 0 } }" ng-change="validatePassword()" required><br>
                <span style="color: red;" ng-show="error2">{{error2}}</span><br>
                <input type="email" name="email" placeholder="Email" ng-model="email" ng-model-options="{ updateOn: 'default blur', debounce: { default: 300, blur: 0 } }" ng-change="validateEmail()" required><br>
                <span style="color: red;" ng-show="error3">{{error3}}</span><br>
                <button type="submit" id="sub">Sign Up</button><br>
                already have an account? <a href="signin.php">Login</a>
            </form>
        </div>
    </div>
    <script src="signup.js"></script>
    <?php if (isset($login_error)) {
        echo "<p>$login_error</p>";
    } ?>
</body>
</html>
<?php
session_start();

// Check if the user is already logged in, redirect to inner.php if so
if (isset($_SESSION['username'])) {
    header("Location: inner.php");
    exit;
}

// Initialize the $login_error variable to avoid undefined variable notice
$login_error = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dropdown.css">
    <link rel="stylesheet" href="navigation.css">
    <title>Sign Up and Sign In</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url(photos/signin.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .form-container h1, .header h1 {
            margin-bottom: 10px;
            text-shadow: 2px 2px #e3d105;
            color: #a2091b;
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
    <div class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><kk style="color: pink;">Food</kk> <span style="color: green;">Gram</span></a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
            </ul>
        </nav>
        <img src="photos/logo.png" width="80px" height="50px" id="logo">
        <marquee direction="left" width="80%" class="a">
            <h1>Online Food Recipe</h1>
        </marquee>
    </div>
    <div class="container">
        <div class="form-container">
            <h1>Sign In</h1>
            <form action="signinDB.php" method="post" id="myForm">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required><br>
                <button type="submit">Sign In</button><br>
                <!-- <a href="">Forgot password</a> -->
                Don't have an account? <a href="signupform.php">Register</a>
            </form>
        </div>
    </div>
    <script>
        // document.getElementById("myForm").addEventListener("submit", function(event) {
        //     event.preventDefault(); // Prevent form from submitting
        //     window.location.href = "inner.html"; // Redirect to welcome.html
        // });
        document.getElementById("logo").addEventListener("click", function() {
            window.location.href = "index.php"; // Replace with the desired URL
        });
    </script>

    <?php
    if (isset($login_error)) {
        echo "<p>$login_error</p>";
    }
    ?>
</body>
</html>

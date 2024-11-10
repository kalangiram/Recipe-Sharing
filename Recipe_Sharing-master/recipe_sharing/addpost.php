<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="navigation.css" rel="stylesheet">
    <style>
        /* Your provided styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1em 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
            max-width: 1200px;
            padding: 0 20px;
        }

        .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5em;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out;
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: 700;
        }

        .nav-links a:hover {
            color: #fff;
            background-color: blue;
        }

        .container {
            width: 400px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
            flex: 1;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            margin-bottom: 20px;
        }

        .container form label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            font-weight: bold;
        }

        .container form input[type="text"],
        .container form select, /* Added select */
        .container form input[type="file"], /* Corrected input name */
        .container form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container form button {
            padding: 10px 20px;
            background-color: #6bed3b;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .container form button:hover {
            background-color: #4fad29;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        .logo span {
            color: #6bed3b;
        }

        /* Additional styling for user icon and dropdown */
        .user-icon {
            font-size: 24px;
            margin-right: 10px;
            cursor: pointer;
        }

        .user-dropdown {
            position: absolute;
            top: 45px;
            right: 20px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .user-dropdown.active {
            display: block;
        }

        .user-dropdown-item {
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
            color: #333;
            text-decoration: none;
            display: block;
        }

        .user-dropdown-item:last-child {
            border-bottom: none;
        }
        /* Additional styling for event form */
        .container form .radio-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        /* Adjust the alignment of radio buttons */
        .container form input[type="radio"] {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><kk style="color: pink;">Food</kk> <span style="color: green;">Gram</span></a>
            </div>
            <ul class="nav-links">
                <li><a href="service.php">Services</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="inner.php">Back</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Share Post</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data" id="acting" >
            <label for="username">Username:</label>
            <select id="username" name="username" required>
                <option value="">Select a state</option>
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "register");
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $query = "SELECT * FROM signup";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['username'] . "'>" . $row['username'] . "</option>";
                }

                mysqli_close($conn);
                ?>
            </select><br>

            <label for="recipe-name">Recipe Name:</label>
            <input type="text" id="recipe-name" name="recipe-name" required><br><br>
            <label for="type">Type of Recipe:</label>
            <select id="type" name="type">
                <option value="Veg Curry">Veg Curry</option>
                <option value="Nonveg Curry">NonVeg Curry</option>
                <option value="Sweets">Sweets</option>
                <option value="Bakery Items">Bakery Items</option>
                <option value="Snack Item">Snack Item</option>
            </select><br><br>
            <label for="recipe-photo">Recipe Photo:</label>
            <input type="file" name="recipe-photo" id="recipe-photo" required>
    
            <label for="recipe-description">Recipe Description:(Within 5 - 8 words) </label>
            <textarea id="recipe-description" name="recipe-description" rows="4" required></textarea><br><br>

            <button type="submit">Share Post</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2023 RecipeSharing Website. All rights reserved.</p>
    </footer>

    <script>
        <?php
        // Close the database connection
        mysqli_close($conn);
        ?>
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restaurant Name</title>
        <link href="navigation.css" rel="stylesheet">
        <link href="dropdown.css" rel="stylesheet">
    <style>
        /* Highlight the active menu link */

/* Menu section styles */
.menu {
    padding: 50px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;

}

.menu-item {
    border: 2px solid #e7694d;
    padding: 20px;
    background-color: #ebf5f5d4;
    border-radius: 7px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2); /* Soft box shadow */
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s; /* Add smooth transitions */
}

.menu-item:hover {
    transform: translateY(-5px); /* Lift the item slightly on hover */
    box-shadow: 8px 8px 15px rgba(0, 0, 0, 0.3); /* Enhanced box shadow on hover */
}

.menu-item img {
    width: 40%;
    margin-bottom: 10px;
    border-radius: 5px; /* Add a slight border radius to images */
}

.menu-item h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333333; /* Darken the heading color */
}

.menu-item p {
    font-size: 16px;
    color: #777777; /* Slightly lighter text color */
    margin-bottom: 10px;
}

.menu-item .price {
    display: block;
    font-size: 20px;
    color: #ff6600;
    font-weight: bold;
    margin-top: 15px; /* Add some space between text and price */
}
/* Adjust the rest of the styles as needed */

    </style>
</head>
<body>
    <nav 
        class="navbar">
            <div class="logo">
                <a href="index.php"><kk style="color: pink;">Food</kk> <span style="color: green;">Gram</span></a>
            </div>
                <li><a href="inner.php">Back</a></li>
            </ul>
        </nav>
    <section class="menu">
            <?php
                session_start(); // Start the session

                // Check if the user is logged in (modify this condition based on your authentication logic)
                if (isset($_SESSION['username']) ) {
                    // Database Connection
                    $servername = 'localhost';
                    $username = 'root';
                    $password = 'root';
                    $database = 'register';

                    $conn = mysqli_connect($servername, $username, $password, $database);

                    if (!$conn) {
                        die("Error in DB connection: " . mysqli_connect_errno() . " : " . mysqli_connect_error());
                    }

                    $user_id = $_SESSION['username']; // Retrieve the user's ID from the session

                    // Check if a file has been deleted
                    if (isset($_GET['deleted']) && $_GET['deleted'] === 'true') {
                        echo '<p>File has been deleted.</p>';
                    }

                    // Query to retrieve the user's uploaded files
                    if ($user_id=='Shannu03'){
                        $query = "SELECT * FROM signup";
                        $result = mysqli_query($conn, $query);

                        echo '<html>';
                        echo '<head>';
                        echo '<link rel="stylesheet" type="text/css" href="your_css_file.css">'; // Link your CSS file
                        echo '</head>';
                        echo '<body>';

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $file = $row['username'];
                                $shareby = $row['password'];
                                $recipe_name = $row['email'];


                                // Display the file with CSS
                                echo '<div class="menu-item">';
                                echo '<h2><strong> Username:</strong> ' . $file . '</h2>';
                                echo '<h2><strong>Password:</strong> ' . $shareby . '</h2>';
                                echo '<h2><strong>email:</strong> ' . $recipe_name . '</h2>';

                                echo '</div>';
                            }
                        } else {
                            echo '<p>No users are present.</p>';
                        }
                    }
                    else{
                        echo '<script type="text/javascript">';
                        echo 'alert("you are not admin");';
                        echo 'window.location.href = "inner.php";'; // Redirect to previous_page
                        echo '</script>';
                        echo '</script>';
                    }

                    echo '</body>';
                    echo '</html>';

                    // Close the database connection
                    mysqli_close($conn);
                } else {
                    echo 'You are not logged in. Please log in to access this page.';
                }
            ?>
    </section>
</body>
</html>
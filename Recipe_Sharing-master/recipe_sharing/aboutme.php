

<?php session_start();

// Check if the user is already logged in, redirect to home.php if so
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>User Profile</title>
    <style>
       body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .profile-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            display: flex;
            align-items: center;
        }

        .profile-info img {
            border-radius: 50%;
            margin-right: 20px;
            max-width: 100px;
        }

        .profile-details {
            flex-grow: 1;
        }

        h2 {
            margin-bottom: 10px;
            color: #333333;
            font-size: 24px; /* Increased font size */
        }

        p {
            margin: 5px 0;
            color: #777777;
            font-size: 16px; /* Increased font size */
        }
        .profile-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .profile-actions button {
            flex-grow: 1;
            margin-right: 10px;
        }

        button {
            padding: 8px 16px;
            font-size: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }


    </style>
</head>
<body>
    <header>
        <h1>User Profile</h1>
    </header>

    <section class="profile-container">
        <div class="profile-info">
            <?php
                // Assuming you have a session started and user data available
                // For demo purposes, I'm using MySQLi for database connection. Replace this with your actual database connection logic.

                // Replace these with your actual database credentials
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "register";

                // Assuming you store the user ID in the session after login
                $userId = $_SESSION['username'];

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch user data from the database
                $stmt = $conn->prepare('SELECT * FROM signup WHERE username= ?');
                $stmt->bind_param('s', $userId);
                $stmt->execute();

                // Get the result set
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $userData = $result->fetch_assoc();
                    ?>
                    <div>
<!--                        <img src="<?php echo $userData['profile_picture']; ?>" alt="Profile Picture" width="100">-->
                        <div>
                            <h2>Hello <?php echo $userData['username']; ?>..!!</h2>
                            <p>Username:  <?php echo $userData['username']; ?></p>
                            <p>Email:  <?php echo $userData['email']; ?></p>
                            <p>Password: <?php echo $userData['password']; ?></p>
                            <div class="profile-actions">
                                <a href="cart.php"><button><span class="fa fa-shopping-cart">&nbsp Your Inbox List</span></button></a>
                                <a href="wishlist.php"><button><span class="fa fa-heart">&nbsp Your Wishlist</span></button></a>
                            </div>
                            <br><a href="logout.php"><button>Logout</button></a>
                        </div>
                    </div>
                    <?php
                } else {
                    echo "User not found!";
                }

                // Close the connection
                $stmt->close();
                $conn->close();
            ?>


<!--<div>
    <img src="<?php echo $userData['profile_picture']; ?>" alt="Profile Picture" width="100">
    <div>
        <h2><?php echo $userData['username']; ?></h2>
        <p>Email: <?php echo $userData['email']; ?></p>
         Add more user information fields as needed 
    </div>
</div>

        </div>-->
    </section>

    <footer>
        <p>&copy; 2023 Your E-commerce Website</p>
    </footer>
</body>
</html>

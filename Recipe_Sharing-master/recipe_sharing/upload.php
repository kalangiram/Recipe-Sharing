<?php

session_start();

// Check if the user is already logged in, redirect to inner.php if so

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_SESSION['username'])) {
        $shareby = $_SESSION['username'];

    // Database Connection
    $servername = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'register';

    $conn = mysqli_connect($servername, $user, $password, $database);

    // Check for connection error
    if (!$conn) {
        die("Error in DB connection: " . mysqli_connect_errno() . " : " . mysqli_connect_error());
    }

    // Get data from the form
    $usernam = $_POST['username'];
    $recipeName = $_POST['recipe-name'];
    $recipeType = $_POST['type'];
    $filename = $_FILES['recipe-photo']['name'];
    $tmp_name = $_FILES['recipe-photo']['tmp_name'];
    $recipeDescription = $_POST['recipe-description'];

    // Handle uploaded file

    if (is_uploaded_file($tmp_name)) {
        $upload_directory = 'upload/';
        $target_path = $upload_directory . $filename;

        if (!is_dir($upload_directory)) {
            mkdir($upload_directory, 0755, true);
        }

        if (move_uploaded_file($tmp_name, $target_path)) {
            // Image database insert SQL
                $insert = "INSERT INTO sharepost (shareby, username, recipe_name, recipe_type, recipe_description, file_name, uploaded_on) VALUES ('$shareby', '$usernam', '$recipeName', '$recipeType', '$recipeDescription', '$filename', NOW())";
            if (mysqli_query($conn, $insert)) {                
                echo '<script type="text/javascript">';
                echo 'alert("Data inserted Successfully");';
                echo 'window.location.href = "addpost.php";'; // Redirect to previous_page
                echo '</script>';
                echo '</script>';
                
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        } else {
            echo 'Error in uploading file - ' . $_FILES['image']['name'] . '<br/>';
        }
    } else {
        echo 'Error: File not uploaded successfully';
    }
}
}   
?>

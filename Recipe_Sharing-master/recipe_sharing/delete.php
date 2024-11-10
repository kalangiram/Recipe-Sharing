<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$servername = "localhost";
$username = "root";
$password = "root";
$database = "register";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





if (isset($_POST['addToCart'])) {
    session_start();
    $session=$_SESSION['username'];
    echo "$session";
            // Your existing code for adding items to the cart here
            $recipeType = $_POST['recipe_type'];
            $recipeDescription = $_POST['recipe_description'];
            $userName = "$session";
            $recipeName = $_POST['recipe_name'];
            $shareby = $_POST['shareby'];
            $filename = $_POST['file_name'];
//            $productImage = $_POST['productImage'];  
//            
            // if not product exists then we are newly inserting data into the "cart" table
            $sql = "INSERT INTO sharepost (shareby, username, recipe_name, recipe_type, recipe_description, file_name, uploaded_on) "
                    . "VALUES ('$shareby', '$userName', '$recipeName', '$recipeType', '$recipeDescription', '$filename', NOW())";
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/javascript">';
                echo 'alert("Item added to Wishlist!");';
                echo 'window.history.back();'; // Redirect to previous_page
                echo '</script>';
            } else {
                echo "Error adding record: " . mysqli_error($conn);
            }

//    } else {
//        echo "Error:" . $conn->error;
    }


if (isset($_POST['removeCart'])) {
    session_start();
    $session=$_SESSION['username'];
    echo "$session";
            // Your existing code for adding items to the cart here
            $recipeType = $_POST['recipe_type'];
            $recipeDescription = $_POST['recipe_description'];
            $userName = "$session";
            $recipeName = $_POST['recipe_name'];
            $shareby = $_POST['shareby'];
            $filename = $_POST['file_name'];
//            $productImage = $_POST['productImage'];  
//            
            // if not product exists then we are newly inserting data into the "cart" table
            $sql = "DELETE FROM sharepost WHERE shareby = '$shareby' and username = '$userName' and file_name='$filename'";
            if ($conn->query($sql) === TRUE) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Item deleted from Inbox share!");';
                    echo 'window.history.back();'; // Redirect to previous_page
                    echo '</script>';
                } else {
                    echo "Error deleting row: " . $conn->error;
                }

//    } else {
//        echo "Error:" . $conn->error;
    }
?>
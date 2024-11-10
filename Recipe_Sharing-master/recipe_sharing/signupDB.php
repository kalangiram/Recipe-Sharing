<?php
// Database connection settings (You can add your database connection code here)

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

try {
    $conn = new mysqli("localhost", "root", "root", "register");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO signup (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        // Registration successful, set a session variable
        session_start();
        $_SESSION['username'] = $username;

        // Redirect the user to another page after registration
        header("Location: inner.php");
        exit();
    } else {
        echo "<html><body>";
        echo "<script>";
        echo "alert('Registration failed');";
        echo "window.location.href = 'signup.html';";
        echo "</script>";
        echo "</body></html>";
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

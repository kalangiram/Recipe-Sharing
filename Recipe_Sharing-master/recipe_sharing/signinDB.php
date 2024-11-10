<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Establish a database connection
    $conn = new mysqli("localhost", "root", "root", "register");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement to check credentials
    $stmt = $conn->prepare("SELECT * FROM signup WHERE username=? AND password=?");
    $stmt->bind_param("ss", $enteredUsername, $enteredPassword);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, authentication successful
        session_start();
        $_SESSION['username'] = $enteredUsername;
        $stmt->close();
        $conn->close();
        header("Location: inner.php");
        exit();
    } else {
        // User not found or authentication failed
        echo "<script>alert('Incorrect credentials'); window.location.href = 'signin.php';</script>";
    }
} else {
    // Handle invalid request (GET request, direct URL access, etc.)
    echo "Invalid request.";
}
?>

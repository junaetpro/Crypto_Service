<?php
// Start session to manage login state
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your database password
$database = "crypto"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Check credentials
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $user; // Store the username in the session
    header("Location: admin_dash.html"); // Redirect to admin page
    exit();
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>

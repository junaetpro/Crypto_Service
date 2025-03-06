<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$database = "crypto"; // Database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    // Redirect to a success page
    header("Location: contact.html"); 
    exit(); // Ensure the script stops executing after the redirect
} else {
    // Redirect to an error page
    header("Location: 404.html"); 
    exit();
}

$stmt->close();
$conn->close();
?>

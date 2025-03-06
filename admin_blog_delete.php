<?php
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "crypto"; // Replace with your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the ID from the query parameter

    // Delete query
    $sql = "DELETE FROM blog_posts WHERE id = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page after deletion
        header("Location: admin_blog_show.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

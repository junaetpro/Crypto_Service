<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crypto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get title and description from the form
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $imageName = time() . "_" . basename($image['name']);
        $uploadDir = "uploads/";
        $uploadPath = $uploadDir . $imageName;

        // Ensure the uploads directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move uploaded file
        if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
            // Save data to the database
            $sql = "INSERT INTO blog_posts (title, description, image_path) 
                    VALUES ('$title', '$description', '$uploadPath')";

            if ($conn->query($sql) === TRUE) {
                echo "Blog post saved successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Please upload a valid image.";
    }
}

$conn->close();
?>

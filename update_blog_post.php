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

// Get form data
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$image_path = null;

// Handle image upload if a new image is provided
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image_path = $target_file;
    } else {
        echo "Error uploading file.";
        exit();
    }
}

// Update query
if ($image_path) {
    $sql = "UPDATE blog_posts SET title = ?, description = ?, image_path = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $description, $image_path, $id);
} else {
    $sql = "UPDATE blog_posts SET title = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $title, $description, $id);
}

if ($stmt->execute()) {
    echo "Record updated successfully!";
    header("Location: admin_blog_show.php"); // Redirect to the blog list
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>

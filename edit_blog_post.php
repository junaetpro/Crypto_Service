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

// Get the ID from the URL
$id = $_GET['id'];

// Fetch current data for the blog post
$sql = "SELECT id, title, description, image_path, upload_date FROM blog_posts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
} else {
    echo "Record not found.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
</head>
<body>
    <h1>Edit Blog Post</h1>
    <form method="POST" action="update_blog_post.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required><br><br>
        <label>Description:</label>
        <textarea name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea><br><br>
        <label>Image:</label>
        <input type="file" name="image"><br><br>
        <p>Current Image: <img src="<?php echo htmlspecialchars($row['image_path']); ?>" alt="Image" width="100"></p>
        <button type="submit">Update</button>
    </form>
</body>
</html>

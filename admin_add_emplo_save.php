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
    // Get form data
    $name = $conn->real_escape_string($_POST['name']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $salary = $conn->real_escape_string($_POST['salary']);
    $address = $conn->real_escape_string($_POST['address']);

    // Handle file upload for photo
    $uploadDir = "employee_photos/"; // Directory for storing employee photos

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = $_FILES['photo'];
        $photoName = time() . "_" . basename($photo['name']);
        $uploadPath = $uploadDir . $photoName;

        // Ensure the upload directory exists
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0777, true)) {
                die("Failed to create photo upload directory.");
            }
        }

        // Move the uploaded photo
        if (move_uploaded_file($photo['tmp_name'], $uploadPath)) {
            // Save employee data to the database
            $sql = "INSERT INTO Employee (Photo, Name, Designation, Salary, Address) 
                    VALUES ('$uploadPath', '$name', '$designation', '$salary', '$address')";

            if ($conn->query($sql) === TRUE) {
                echo "Employee data saved successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Failed to upload employee photo.";
        }
    } else {
        echo "Please upload a valid photo.";
    }
}

$conn->close();
?>

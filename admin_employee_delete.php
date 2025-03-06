<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crypto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the employee ID is set in the URL
if (isset($_GET['id'])) {
    $employeeID = $_GET['id'];

    // Prepare the delete query
    $sql = "DELETE FROM Employee WHERE EmployeeID = ?";

    // Prepare and bind the statement
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $employeeID); // "i" for integer type

        // Execute the query
        if ($stmt->execute()) {
            echo "Employee record deleted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the query: " . $conn->error;
    }
} else {
    echo "Employee ID not provided.";
}

// Close the connection
$conn->close();

// Redirect back to the employee list page
header("Location: admin_employee_show.php"); // Adjust this to your list page
exit();
?>

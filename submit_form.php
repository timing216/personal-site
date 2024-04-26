<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "utaro"; // Change this to your database username
$password = "newPassword123"; // Change this to your database password
$dbname = "registrationForm"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$userid = $_POST['userid'];
$email = $_POST['email'];
$password2 = $_POST['password2'];
$message = $_POST['message'];

// SQL query to insert data into database
$sql = "INSERT INTO users(userid, email, password2, message) VALUES ('$userid', '$email', '$password2', '$message')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: another_page.php");
    exit(); // prevent further script execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement
// $stmt->close();
// Close connection
$conn->close();
?>

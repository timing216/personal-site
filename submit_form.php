<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Database connection parameters
$servername = "localhost"; // database server name
$username = "utaro"; // database username
$password = "newPassword123"; // database password
$dbname = "registrationForm"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$userName = trim($_POST['userName']);
$email = trim($_POST['email']);
$password2 = trim($_POST['password2']);
$password2 = hash('sha256',$password2);
$message = trim($_POST['message']);

// SQL query to insert data into database
$sql = "INSERT INTO users(userName, email, password2, message) VALUES ('$userName', '$email', '$password2', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Rgistration Success";
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

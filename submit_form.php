<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "utaro"; // Change this to your database username
$password = "paSSw0rd"; // Change this to your database password
$dbname = "ContactForm"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// SQL query to insert data into database
$sql = "INSERT INTO contact_entries (first_name, last_name, email, phone, message) VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement
$stmt->close();
// Close connection
$conn->close();
?>

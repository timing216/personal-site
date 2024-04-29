<?php
require_once 'vendor/autoload.php';

use \Firebase\JWT\JWT;

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// Database configuration and connection setup
$servername = "localhost";
$username = "utaro";
$password = "newPassword123";
$dbname = "registrationForm";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
// Use of prepared statements for counter SQL injection
$stmt = $conn->prepare("INSERT INTO users (userName, email, password, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $userName, $email, $passwordHash, $message);

$userName = $conn->real_escape_string($_POST['userName']);
$email = $conn->real_escape_string($_POST['email']);
$password1 = $conn->real_escape_string($_POST['password1']);
$passwordHash = password_hash($password1, PASSWORD_DEFAULT);
$message = $conn->real_escape_string($_POST['message']);

if ($stmt->execute()) {
    echo "Registration Successful.";

    try {
        $key = getenv('JWT_SECRET_KEY') ?: 'default_secret_key'; // Should be stored in an environment variable
        $issuedAt = time();
        $expirationTime = $issuedAt + 1800;  // JWT valid for 30 minutes
        $payload = [
            'email' => $email,
            'iat' => $issuedAt,
            'exp' => $expirationTime
        ];

        $jwt = JWT::encode($payload, $key);
        setcookie("jwt", $jwt, $expirationTime, "/", "", true, true); // Secure and HTTPOnly

        header("Location: welcome_page.php");
        exit;
    } catch (Exception $e) {
        echo "Error encoding JWT: " . $e->getMessage();
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

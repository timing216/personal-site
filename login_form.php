<?php
require_once 'vendor/autoload.php';

use \Firebase\JWT\JWT;

session_start();

$servername = "localhost";
$username = "utaro";
$password = "newPassword123";
$dbname = "registrationForm";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            $key = getenv('JWT_SECRET_KEY') ?: 'default_secret_key';
            $issuedAt = time();
            $expirationTime = $issuedAt + 1800;  // JWT valid for 30 minutes
            $payload = [
                'email' => $email,
                'iat' => $issuedAt,
                'exp' => $expirationTime
            ];

            $jwt = JWT::encode($payload, $key);
            setcookie("jwt", $jwt, $expirationTime, "/", "", true, true);

            header("Location: blog.php");
            exit;
        } else {
            echo "<script type='text/javascript'>alert('Passwords do not match');</script>";
        }
    } else {
        header("Location: login.php");
        echo "<script type='text/javascript'>alert('User not found.');</script>";
        exit;
    }

    $stmt->close();
}
$conn->close();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $conn->real_escape_string($_POST['email']);
//     $password = $conn->real_escape_string($_POST['password']);

//     $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $stmt->store_result();

//     if ($stmt->num_rows == 1) {
//         $stmt->bind_result($hashedPassword);
//         $stmt->fetch();

//         if (password_verify($password, $hashedPassword)) {
//             // Generate JWT and redirect as before
//             header("Location: blog.php");
//             exit;
//         } else {
//             $_SESSION['error_message'] = "Invalid password.";
//             header("Location: login.php");
//             exit;
//         }
//     } else {
//         $_SESSION['error_message'] = "User not found.";
//         header("Location: login.php");
//         exit;
//     }

//     $stmt->close();
// }
// $conn->close();

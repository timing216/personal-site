<?php
session_start();
if (isset($_SESSION['user']) != "") {
    header("Location: profile.php");
}
include_once 'connect.php';
if (isset($_POST['sca'])) {
    $username = trim($_POST['username']);
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $pass = trim($_POST['pass']);
    $password = hash('sha256', $pass);
    $query = "insert into people(username,fname,lname,pass) values(?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $fname, $lname, $password]);
    $rowsAdded = $stmt->rowCount();
    if ($rowsAdded == 1) {
        $message = "Success! Proceed to login";
        unset($fname);
        unset($lname);
        unset($pass);
        header("Location: login.php");
    } else {
        $message = "Failed! For some reason";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <h3>Register</h3>
    </title>
</head>

<body>
    <form action="index.php" method="post">
        <div>
            <label for="fname ">First name:</label>
            <input type="text" name="fname" placeholder="James">
        </div>
        <br>
        <div>
            <label for="lname">Last name:</label>
            <input type="text" name="lname" placeholder="Bond">
        </div>
        <br>
        <div>
            <label for="username">username:</label>
            <input type="text" name="username" placeholder="JohnDoe007">
        </div>
        <br>

        <div>
            <label for="pass">password:</label>
            <input type="text" name="pass">
        </div>
        <br>
        <div>
            <label for="pass">Confirm password:</label>
            <input type="text" name="pass" />
        </div>
        <br>
        <div>
            <input type="submit" value="Register" name="submit" />
        </div>

    </form>

</body>

</html>
<?php
require 'connection.php';
$connect = Connect();

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch the credentials from the database
    $query = "SELECT * FROM credentials WHERE username = :username";
    $query_run = $connect->prepare($query);
    $query_run->bindParam(':username', $username);
    $query_run->execute();
    $result = $query_run->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Check if the password matches
        if ($result['password'] === $password) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php'); // Redirect to a welcome page or dashboard
            exit();
        } else {
            echo '<script>alert("Invalid Password")</script>';
        }
    } else {
        echo '<script>alert("No User Found")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreView Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="clapperboard.png" alt="Logo">
            </div>
        </div>
        <div class="right-section">
            <h1>Welcome to PreView</h1>
            <form action="login.php" method="post">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username/Email" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <!-- Log In button -->
                <button type="submit" class="login-button">Log In</button>
                <!-- Sign Up button -->
                <button type="button" class="signup-button" onclick="window.location.href='signup.php'">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>
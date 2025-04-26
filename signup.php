<?php
require 'connection.php';
$connect = Connect();

session_start();

// if (!isset($_SESSION['username'])) {
//     header('Location: login.php'); // Redirect if not logged in
//     exit();
// }

try {
    if (isset($_POST['save_creds'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        // Check if username already exists
        $check_query = "SELECT COUNT(*) AS count FROM credentials WHERE username = :user";
        $check_stmt = $connect->prepare($check_query);
        $check_stmt->execute([':user' => $user]);
        $result = $check_stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            // Username already exists, show error
            echo '<script>alert("Username already exists. Please choose a different username.")</script>';
        } else {
            // Username does not exist, proceed with insertion
            $query = "INSERT INTO credentials(username, password) 
                      VALUES (:user, :pass)";

            $query_run = $connect->prepare($query);

            $data = [
                ':user' => $user,
                ':pass' => $pass,
            ];

            $query_execute = $query_run->execute($data);

            if ($query_execute) {
                echo '<script>alert("Record has been saved")</script>';
                header('Location: login.php');
            } else {
                echo '<script>alert("Error saving record. Please try again.")</script>';
            }
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Sign Up</title>
    <link rel="stylesheet" href="css\styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="background\bg.png" alt="Logo">
            </div>
        </div>
        <div class="right-section">
            <h1>Sign Up Now</h1>
            <form action="signup.php" method="post">
                <div class="input-group">
                    <input type="text" name="user" id="user" placeholder="Username/Email" required>
                </div>
                <div class="input-group">
                    <input type="password" name="pass" id="pass" placeholder="Password" required>
                </div>
                <button type="submit" name="save_creds" id="save_creds">Sign Up</button>
            </form>
        </div>
        <a href="login.php">
            <!-- <button type="button" class="login-button"  >Login</button> -->
        </a>
    </div>
</body>

</html>
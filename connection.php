<?php
function Connect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "123456";
    $dbname = "preview";
    $port = 3307;

    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Connected to $dbname at $dbhost successfully";
        return $conn;
    } catch (PDOException $ex) {
        die("Could not connect to Database $dbname:" . $ex->getMessage());
    }
}

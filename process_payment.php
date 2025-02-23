<?php
require 'connection.php'; // Adjust path as necessary
$connect = Connect();

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect if not logged in
    exit();
}

if (!isset($_SESSION['user_id'])) {
    // Handle the case where user_id is not set in the session
    echo 'Error: User ID is not set in the session.';
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming the form is properly validated and sanitized before processing
    $username = $_SESSION['username'];
    $movie_title = $_POST['title'];

    // Fetching form data
    $city = $_POST['city'];
    $cinema = $_POST['cinema'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $cinemaNumber = $_POST['cinema-number'];
    $seatType = $_POST['seat-type'];
    $seat_number = $_POST['seat_number']; // Assuming this is a comma-separated list of seat IDs
    $paymentMethod = $_POST['payment-method'];
    $total_price = floatval($_POST['total_price']);

    // Convert time format from '10:00 AM' to 'HH:MM:SS'
    $time = date("H:i:s", strtotime($time));

    // Inserting data into the database using prepared statements
    $query = "INSERT INTO movie_bookings (movie_title, city, cinema, date, time, cinema_number, seat_type, seat_number, payment_method, total_price, user_id)
          VALUES (:movie_title, :city, :cinema, :date, :time, :cinema_number, :seat_type, :seat_number, :payment_method, :total_price, :user_id)";
    $query_run = $connect->prepare($query);
    $query_run->bindParam(':movie_title', $movie_title);
    $query_run->bindParam(':city', $city);
    $query_run->bindParam(':cinema', $cinema);
    $query_run->bindParam(':date', $date);
    $query_run->bindParam(':time', $time);
    $query_run->bindParam(':cinema_number', $cinemaNumber);
    $query_run->bindParam(':seat_type', $seatType);
    $query_run->bindParam(':seat_number', $seat_number); // Binding seat_number
    $query_run->bindParam(':payment_method', $paymentMethod);
    $query_run->bindParam(':total_price', $total_price);
    $query_run->bindParam(':user_id', $_SESSION['user_id']); // Assuming user_id is stored in the session

    // Execute query
    try {
        $query_run->execute();
        // Redirect to receipt.php with the booking ID or any other relevant identifier
        $booking_id = $connect->lastInsertId(); // Assuming you have auto-incremented primary key
        header("Location: receipt.php?booking_id=$booking_id");
        exit();
    } catch (PDOException $e) {
        // Handle database errors
        echo 'Error: ' . $e->getMessage(); // Display error message (for development/debugging)
        // You might want to redirect to an error page or show a user-friendly error message
    }
}

<?php
require 'connection.php'; // Adjust path as necessary
$connect = Connect();

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect if not logged in
    exit();
}

if (!isset($_GET['booking_id'])) {
    // Handle the case where booking_id is not provided in the URL
    echo 'Error: Booking ID is not provided.';
    exit();
}

// Fetching booking details from the database based on booking_id
$booking_id = $_GET['booking_id'];
$query = "SELECT * FROM movie_bookings WHERE booking_id = :booking_id";
$query_run = $connect->prepare($query);
$query_run->bindParam(':booking_id', $booking_id);
$query_run->execute();
$booking_details = $query_run->fetch(PDO::FETCH_ASSOC);

// Check if booking exists
if (!$booking_details) {
    echo 'Error: Booking not found.';
    exit();
}

// Extract booking details
$movie_title = $booking_details['movie_title'];
$location = $booking_details['city']; // Assuming 'city' is where location is stored
$cinema = $booking_details['cinema'];
$date = $booking_details['date'];
$time = $booking_details['time'];
// Assuming seat_number is stored as comma-separated values in the database
$seat_numbers = explode(',', $booking_details['seat_number']);
$seat_type = $booking_details['seat_type'];
$payment_method = $booking_details['payment_method'];
$total_price = $booking_details['total_price'];

// Display the receipt
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Receipt</title>
    <link rel="stylesheet" href="css\receipt.css">
    <link rel="stylesheet" href="css\dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img class="logoimg" src="background\clapperboard.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="dashboard.php">HOME</a></li>
                    <li><a href="dashboard.php">NOW SHOWING</a></li>
                    <li><a href="dashboard.php">UPCOMING MOVIES</a></li>
                    <li><a href="dashboard.php">CINEMAS</a></li>
                    <li><a href="dashboard.php">STREAMING SOON</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="receipt-container">
            <h2>Online Receipt</h2>
            <p><strong>Movie:</strong> <?php echo $movie_title; ?></p>
            <p><strong>Location:</strong> <?php echo $location; ?></p>
            <p><strong>Cinema:</strong> <?php echo $cinema; ?></p>
            <p><strong>Date:</strong> <?php echo $date; ?></p>
            <p><strong>Time:</strong> <?php echo $time; ?></p>
            <p><strong>Seats:</strong> <?php echo implode(', ', $seat_numbers); ?></p>
            <p><strong>Seat Type:</strong> <?php echo $seat_type; ?></p>
            <p><strong>Payment Method:</strong> <?php echo $payment_method; ?></p>
            <p><strong>Total Price: ₱</strong> <?php echo $total_price; ?></p>
            <button onclick="printReceipt()">Print Receipt</button>
        </section>
    </main>

    <script>
        function printReceipt() {
            window.print();
        }
    </script>
</body>

</html>
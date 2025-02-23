<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Log form data
    error_log("Form data received: " . print_r($_POST, true));

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO movies (title, duration, release_date, genre, director, writer, producer, released_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $movie_title, $duration, $release_date, $genre, $director, $writer, $producer, $released_by);

    // Set parameters and execute
    $movie_title = $_POST['movie_title'];
    $duration = $_POST['duration'];
    $release_date = $_POST['release_date'];
    $genre = $_POST['genre'];
    $director = $_POST['director'];
    $writer = $_POST['writer'];
    $producer = $_POST['producer'];
    $released_by = $_POST['released_by'];

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        // Debug: Log SQL error
        error_log("SQL error: " . $stmt->error);
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <form method="post" action="dashboard.php">
        <label for="movie_title">Movie Title:</label><br>
        <input type="text" id="movie_title" name="movie_title"><br>
        <label for="duration">Duration:</label><br>
        <input type="text" id="duration" name="duration"><br>
        <label for="release_date">Release Date:</label><br>
        <input type="date" id="release_date" name="release_date"><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br>
        <label for="director">Director:</label><br>
        <input type="text" id="director" name="director"><br>
        <label for="writer">Writer:</label><br>
        <input type="text" id="writer" name="writer"><br>
        <label for="producer">Producer:</label><br>
        <input type="text" id="producer" name="producer"><br>
        <label for="released_by">Released By:</label><br>
        <input type="text" id="released_by" name="released_by"><br>
        <button type="submit">Proceed to Payment</button>
    </form>
</body>
</html>

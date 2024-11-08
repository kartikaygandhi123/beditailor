<?php
session_start(); // Start session to store messages

// Database connection
$servername = "localhost";
$username = "u754798798_root";
$password = "#Pgckot999";
$dbname = "u754798798_measurement_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the URL parameter
$id = $_GET['id'] ?? null;

if ($id) {
    // Prepare and execute the deletion query
    $stmt = $conn->prepare("DELETE FROM measurements WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['status'] = "Record deleted successfully.";
    } else {
        $_SESSION['status'] = "No record found with this ID.";
    }

    $stmt->close();
} else {
    $_SESSION['status'] = "ID is not set.";
}

$conn->close();
header("Location: data2.php"); // Redirect to index.php with session message
exit();

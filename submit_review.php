<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$reviewer_name = $_POST['reviewer_name'];
$review_text = $_POST['review_text'];
$rating = intval($_POST['rating']);
$restaurant_id = intval($_POST['restaurant_id']);

// Insert new review into the database
$insert_sql = "INSERT INTO reviews (reviewer_name, review_text, rating, restaurant_id) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($insert_sql);
$stmt->bind_param("ssii", $reviewer_name, $review_text, $rating, $restaurant_id);

if ($stmt->execute()) {
    echo "New review added successfully!";
    // Redirect back to the restaurant page or another appropriate page
    header("Location: restaurant_page.php?id=" . $restaurant_id);
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

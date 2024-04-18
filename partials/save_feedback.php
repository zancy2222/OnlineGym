<?php
session_start(); // Start the session

// Include the database connection file
include 'db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // SQL query to insert feedback into database
    $sql = "INSERT INTO feedback (user_id, name, email, message) VALUES ('$user_id', '$name', '$email', '$message')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Feedback submitted successfully');</script>";
        echo "<script>window.location.href = '../Users/feedback.php';</script>"; // Redirect back to login page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

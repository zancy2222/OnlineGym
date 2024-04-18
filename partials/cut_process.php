<?php
session_start(); // Start the session

// Include the database connection file
include 'db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $workout = $_POST['workout'];
    $sets = $_POST['sets'];
    $reps = $_POST['reps'];
    $schedule_date = $_POST['schedule-date'];
    $schedule_time = $_POST['schedule-time'];

    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // SQL query to insert workout into database
    $sql = "INSERT INTO workouts (user_id, workout_name, sets, reps, schedule_date, schedule_time) 
            VALUES ('$user_id', '$workout', '$sets', '$reps', '$schedule_date', '$schedule_time')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cut saved successfully');</script>";
        echo "<script>window.location.href = '../Users/cut.php';</script>"; // Redirect back to login page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

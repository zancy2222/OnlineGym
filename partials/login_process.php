<?php
session_start(); // Start the session

// Include the database connection file
include 'db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, set session variables
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id']; // Assuming 'id' is the primary key of the users table
        $_SESSION['username'] = $user['username'];

        // Redirect to UserPage.php
        header("Location: ../Users/UserPage.php");
        exit();
    } else {

        echo "<script>alert('Invalid email or password');</script>";
        echo "<script>window.location.href = '../Login.php';</script>"; // Redirect back to login page
        exit();
    }
}

// Close database connection
$conn->close();
?>

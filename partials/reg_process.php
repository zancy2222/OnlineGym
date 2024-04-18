<?php
// Include the database connection file
include 'db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to insert data into database
    $sql = "INSERT INTO users (username, first_name, last_name, age, gender, number, address, email, password)
            VALUES ('$username', '$first_name', '$last_name', '$age', '$gender', '$number', '$address', '$email', '$password')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<script>window.location.href = '../Login.php';</script>"; // Redirect back to login page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

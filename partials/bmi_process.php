<?php
session_start(); // Start the session

// Include the database connection file
include 'db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // Calculate BMI
    $heightInMeters = $height / 100;
    $bmi = $weight / ($heightInMeters * $heightInMeters);

    // Determine BMI category
    if ($bmi < 18.5) {
        $category = 'Underweight';
    } else if ($bmi >= 18.5 && $bmi < 25) {
        $category = 'Normal weight';
    } else if ($bmi >= 25 && $bmi < 30) {
        $category = 'Overweight';
    } else {
        $category = 'Obese';
    }

    // Determine BMI message
    if ($category === 'Underweight') {
        $message = 'You may need to gain some weight for better health.';
    } else if ($category === 'Normal weight') {
        $message = 'Your weight is within the healthy range. Keep it up!';
    } else if ($category === 'Overweight') {
        $message = 'You may need to lose some weight for better health.';
    } else {
        $message = 'You may need to lose weight urgently for better health.';
    }

    // SQL query to insert BMI record into database
    $sql = "INSERT INTO bmi_records (user_id, age, gender, height_cm, weight_kg, bmi, bmi_category, bmi_message) 
            VALUES ('$user_id', '$age', '$gender', '$height', '$weight', '$bmi', '$category', '$message')";

    // Execute query
    if ($conn->query($sql) === TRUE) {        
        echo "<script>alert('BMI record saved successfully');</script>";
        echo "<script>window.location.href = '../Users/bmi.php';</script>"; // Redirect back to login page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

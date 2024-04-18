<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // If user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// User is logged in, display UserPage content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Gym System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('../Assets/images/bg.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #fff;
        }

        .button {
            display: inline-block;
            padding: 20px 40px;
            margin: 10px;
            font-size: 20px;
            background-color: #2c723d; /* Changed color to match the theme */
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            border: none; /* Removed border */
            cursor: pointer; /* Added cursor pointer */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Added subtle box shadow */
        }

        .button:hover {
            background-color: #1e502c; /* Darker shade on hover */
        }

        .button i {
            margin-right: 10px; /* Added spacing between icon and text */
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Welcome to Online Gym System, <?php echo $_SESSION['username']; ?></h1>
        <a href="create_workout.php" class="button"><i class="fas fa-dumbbell"></i>Create Workout</a>
        <a href="bmi.php" class="button"><i class="fas fa-weight"></i>BMI</a>
        <a href="feedback.php" class="button"><i class="fas fa-comments"></i>Feedback</a>
        <a href="History.php" class="button"><i class="fas fa-history"></i>History</a>
        <a href="Notifs.php" class="button"><i class="fas fa-bell"></i>Notifs</a>

    </div>
</body>
</html>

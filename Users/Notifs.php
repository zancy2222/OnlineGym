<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c723d;
        }

        .notification {
            background-color: #f9f9f9;
            border-left: 6px solid #2c723d;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .notification-icon {
            display: inline-block;
            font-size: 20px;
            color: #2c723d;
            margin-right: 10px;
        }

        .notification-content {
            display: inline-block;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Notifications</h1>

        <?php
        // Include the database connection file
        include '../partials/db_conn.php';

        // Check if the user is logged in and get their user_id
        // Assuming user_id is stored in session after login
        session_start();
        if (!isset($_SESSION['user_id'])) {
            // Redirect to the login page if user is not logged in
            header("Location: login.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

        // Query to fetch messages based on the user_id
        $sql = "SELECT * FROM messages WHERE feedback_id IN (SELECT id FROM feedback WHERE user_id = $user_id)";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="notification">';
                echo '<span class="notification-icon">&#x1F514;</span>'; // Bell icon
                echo '<span class="notification-content">' . $row["admin_reply"] . '</span>';
                echo '</div>';
            }
        } else {
            echo '<p style="text-align: center;">No notifications found</p>';
        }

        // Close database connection
        $conn->close();
        ?>

    </div>
</body>
</html>

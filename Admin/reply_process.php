<?php
// Include the database connection file
include '../partials/db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $feedback_id = $_POST['feedback_id'];
    $admin_reply = $_POST['admin_reply'];

    // Prepare SQL statement to insert admin reply into messages table
    $sql = "INSERT INTO messages (feedback_id, admin_reply) VALUES (?, ?)";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $feedback_id, $admin_reply);

    // Execute the statement
    if ($stmt->execute()) {
        // Admin reply inserted successfully
        // Redirect back to feedback page or show success message
        header("Location: Feedback_Dashboard.php");
        exit();
    } else {
        // Error occurred while inserting admin reply
        // You can handle the error accordingly
        echo "Error: " . $conn->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to feedback page if form is not submitted
    header("Location: Feedback_Dashboard.php");
    exit();
}
?>

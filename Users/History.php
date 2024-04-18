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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected option from the dropdown
    $table = $_POST['history_type'];

    // Query to fetch data based on the selected option
    switch ($table) {
        case 'workouts':
            $sql = "SELECT * FROM workouts WHERE user_id = $user_id";
            break;
        case 'bulk_workouts':
            $sql = "SELECT * FROM bulk_workouts WHERE user_id = $user_id";
            break;
        case 'weight_loss_workouts':
            $sql = "SELECT * FROM weight_loss_workouts WHERE user_id = $user_id";
            break;
        case 'bmi_records':
            $sql = "SELECT * FROM bmi_records WHERE user_id = $user_id";
            break;
        default:
            echo "Invalid option selected";
            exit();
    }

    // Execute the query
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #2c723d;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            color: #2c723d;
        }

        select {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
            color: #555;
        }

        input[type="submit"] {
            padding: 8px 16px;
            border-radius: 5px;
            border: none;
            background-color: #2c723d;
            color: white;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
            color: #555;
        }

        th {
            background-color: #2c723d;
            font-weight: bold;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        p {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>History</h1>

        <!-- Dropdown to select the history type -->
        <form method="POST">
            <label for="history_type">Select History Type:</label>
            <select name="history_type" id="history_type">
                <option value="workouts">Workouts</option>
                <option value="bulk_workouts">Bulk Workouts</option>
                <option value="weight_loss_workouts">Weight Loss Workouts</option>
                <option value="bmi_records">BMI Records</option>
            </select>
            <input type="submit" value="Show History">
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $result->num_rows > 0): ?>
            <!-- Display fetched data in a table -->
            <table>
                <thead>
                    <tr>
                        <?php
                        // Fetch field names from the result set
                        $field_names = $result->fetch_fields();
                        foreach ($field_names as $field) {
                            echo "<th>" . $field->name . "</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <?php foreach ($row as $value): ?>
                                <td><?php echo $value; ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <p>No records found for the selected history type.</p>
        <?php endif; ?>
    </div>
</body>
</html>

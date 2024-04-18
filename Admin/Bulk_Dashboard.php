<?php
// Include the database connection file
include '../partials/db_conn.php';

// Check if the delete button is clicked
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    // Query to delete bulk workout record based on ID
    $delete_sql = "DELETE FROM bulk_workouts WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
                echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href = 'Bulk_Dashboard.php';</script>"; // Redirect back to login page
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Query to fetch bulk workout records
$sql = "SELECT u.id as user_id, u.first_name, u.last_name, bw.id, bw.day, bw.workout_name, bw.sets, bw.reps, bw.schedule_date, bw.schedule_time 
        FROM bulk_workouts bw
        INNER JOIN users u ON bw.user_id = u.id";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="Assets/style.css">
    <style>
        .table-container {
            margin-top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #2c723d;
            /* Green color */
            color: #fff;
        }

        thead th {
            padding: 15px;
            text-align: center;
            /* Center align header text */
        }

        tbody tr:nth-child(even) {
            background-color: #f5f5f5;
            /* Alternate row color */
        }

        tbody td {
            padding: 15px;
            text-align: center;
            /* Center align data cell text */
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            /* Border between rows */
        }

        th:first-child,
        td:first-child {
            border-left: none;
            /* Remove left border for first column */
        }

        th:last-child,
        td:last-child {
            border-right: none;
            /* Remove right border for last column */
        }

        .action-buttons {
            display: flex;
            justify-content: center;
        }

        .action-buttons button {
            margin: 5px;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .update-button {
            background-color: #2c723d;
            color: #fff;
            border: none;
        }

        .delete-button {
            background-color: #ff5252;
            color: #fff;
            border: none;
        }

        .update-button:hover,
        .delete-button:hover {
            background-color: #1e502c;
        }
    </style>
    <title>Admin Dashboard</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="Assets/images/fitness.png">
                    <h2>Online<span class="danger">Gym</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="Dashboard.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>

                <a href="Cut_Dashboard.php">
                    <span class="material-icons-sharp">
                        fitness_center
                    </span>
                    <h3>Cut Details</h3>
                </a>

                <a href="Bulk_Dashboard.php" class="active">
                    <span class="material-icons-sharp">
                        sports_gymnastics
                    </span>
                    <h3>Bulk Details</h3>
                </a>
                <a href="WL_Dashboard.php">
                    <span class="material-icons-sharp">
                        scale
                    </span>
                    <h3>Weight loss details</h3>
                </a>
                <a href="Feedback_Dashboard.php">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Feedback</h3>

                </a>
                <a href="BMI_Dashboard.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>BMI</h3>
                </a>



                <a href="../adminLogin.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Day</th>
                            <th>Workout Name</th>
                            <th>Sets</th>
                            <th>Reps</th>
                            <th>Schedule Date</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                                echo "<td>" . $row["day"] . "</td>";
                                echo "<td>" . $row["workout_name"] . "</td>";
                                echo "<td>" . $row["sets"] . "</td>";
                                echo "<td>" . $row["reps"] . "</td>";
                                echo "<td>" . $row["schedule_date"] . "</td>";
                                echo "<td>" . $row["schedule_time"] . "</td>";
                                echo '<td class="action-buttons">';
                                // Delete button form
                                echo '<form method="post">';
                                echo '<input type="hidden" name="delete_id" value="' . $row["id"] . '">';
                                echo '<button type="submit" class="delete-button">Delete</button>';
                                echo '</form>';
                                echo '</td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No bulk workouts found</td></tr>";
                        }

                       
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>


                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Admin</b></p>
                        <small class="text-muted">Welcome</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/human.png">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="Assets/images/human.png">
                    <h2>Admin</h2>
                    <p>Bulk Details</p>
                </div>
            </div>

        </div>


    </div>

    <script src="Assets/orders.js"></script>
    <script src="Assets/index.js"></script>
</body>

</html>

<?php
// Close database connection
$conn->close();
?>
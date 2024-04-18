<?php
// Include the database connection file
include '../partials/db_conn.php';

// Query to fetch feedback records
$sql = "SELECT f.id, u.first_name, u.last_name, f.email, f.message, f.submitted_at
        FROM feedback f
        INNER JOIN users u ON f.user_id = u.id";
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

        .reply-button {
            background-color: yellow;
            color: black;
            border: none;
        }

        .delete-button {
            background-color: #ff5252;
            color: #fff;
            border: none;
        }

        .reply-button:hover {
            background-color: darkgoldenrod;
        }

        .delete-button:hover {
            background-color: #1e502c;
        }
        #reply-form {
        display: none;
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #reply-form textarea {
        width: 100%;
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    #reply-form button {
        display: inline-block;
        padding: 10px 20px;
        margin-right: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #reply-form button.close-btn {
        background-color: #f44336;
    }

    #reply-form button:hover {
        background-color: #45a049;
    }

    #reply-form .btn-container {
        text-align: right;
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

                <a href="Bulk_Dashboard.php">
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
                <a href="Feedback_Dashboard.php" class="active">
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                            <th>Actions</th> <!-- New column for actions -->

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["message"] . "</td>";
                                echo "<td>" . $row["submitted_at"] . "</td>";
                                echo '<td class="action-buttons">';
                                echo '<button class="reply-button" data-feedback-id="' . $row["id"] . '">Reply</button>';
                                echo '</td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No feedback records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <!-- Reply form -->
            <div id="reply-form">
    <form action="reply_process.php" method="POST">
        <input type="hidden" id="feedback-id" name="feedback_id" value="">
        <textarea name="admin_reply" id="admin-reply" cols="30" rows="5" placeholder="Enter your reply here" required></textarea>
        <div class="btn-container">
            <button type="submit">Send Reply</button>
            <button type="button" class="close-btn" onclick="closeReplyForm()">Close</button>
        </div>
    </form>
</div>
        </main>

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
                    <p>Feedback Details</p>
                </div>
            </div>

        </div>


    </div>
    <script>
        // JavaScript to handle showing reply form when reply button is clicked
        const replyButtons = document.querySelectorAll('.reply-button');
        const replyForm = document.getElementById('reply-form');
        const feedbackIdInput = document.getElementById('feedback-id');

        replyButtons.forEach(button => {
            button.addEventListener('click', () => {
                const feedbackId = button.dataset.feedbackId;
                feedbackIdInput.value = feedbackId;
                replyForm.style.display = 'block';
            });
        });

        function closeReplyForm() {
        document.getElementById('reply-form').style.display = 'none';
    }
    </script>
    <script src="Assets/orders.js"></script>
    <script src="Assets/index.js"></script>
</body>

</html>

<?php
// Close database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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

        .update-button:hover, .delete-button:hover {
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
                    <img src="images/fitness.png">
                    <h2>Online<span class="danger">Gym</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>

                <a href="" class="active">
                    <span class="material-icons-sharp">
                        fitness_center
                    </span>
                    <h3>Cut Details</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">
                        sports_gymnastics
                    </span>
                    <h3>Bulk Details</h3>
                </a>
                <a href="Dashboard.php">
                    <span class="material-icons-sharp">
                        scale
                    </span>
                    <h3>Weight loss details</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Feedback</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>BMI</h3>
                </a>



                <a href="#">
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
                            <th>Cut name</th>
                            <th>Sets</th>
                            <th>Reps</th>
                            <th>Schedule Date</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Barbell Squats</td>
                            <td>3 sets</td>
                            <td>8-12 reps</td>
                            <td>2024-04-20</td>
                            <td>08:00 AM</td>
                            <td class="action-buttons">
                        <button class="update-button">Update</button>
                        <button class="delete-button">Delete</button>
                    </td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Barbell Squats</td>
                            <td>3 sets</td>
                            <td>8-12 reps</td>
                            <td>2024-04-20</td>
                            <td>09:00 AM</td>
                            <td class="action-buttons">
                        <button class="update-button">Update</button>
                        <button class="delete-button">Delete</button>
                    </td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Barbell Squats</td>
                            <td>3 sets</td>
                            <td>8-12 reps</td>
                            <td>2024-04-20</td>
                            <td>10:00 AM</td>
                            <td class="action-buttons">
                        <button class="update-button">Update</button>
                        <button class="delete-button">Delete</button>
                    </td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Barbell Squats</td>
                            <td>3 sets</td>
                            <td>8-12 reps</td>
                            <td>2024-04-20</td>
                            <td>11:00 AM</td>
                            <td class="action-buttons">
                        <button class="update-button">Update</button>
                        <button class="delete-button">Delete</button>
                    </td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>Barbell Squats</td>
                            <td>3 sets</td>
                            <td>8-12 reps</td>
                            <td>2024-04-20</td>
                            <td>12:00 PM</td>
                            <td class="action-buttons">
                        <button class="update-button">Update</button>
                        <button class="delete-button">Delete</button>
                    </td>
                        </tr>
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
                    <img src="images/human.png">
                    <h2>Admin</h2>
                    <p>Dashboard</p>
                </div>
            </div>
           
        </div>


    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>
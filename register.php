<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Registration Form</title> 
</head>
<body>
    <div class="container">
        <header>User Registration</header>

        <form action="partials/reg_process.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Enter your username" required>
                        </div>

                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Enter your first name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter your last name" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" name="age" placeholder="Enter your age">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="tel" name="number" placeholder="Enter mobile number">
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter your address">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="RegisterBtn">
                    <span class="btnText">Register</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div> 
        </form>
    </div>

    <script src="Assets/script.js"></script>
</body>
</html>

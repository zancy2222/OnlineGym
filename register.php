<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Responsive Regisration Form </title> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="Partials/register.php" method="post">
    <div class="form first">
        <div class="details personal">
            <span class="title">Personal Details</span>

            <div class="fields">
                <div class="input-field">
                    <label>Full Name</label>
                    <input type="text" name="full_name" placeholder="Enter your name" required>
                </div>

                <div class="input-field">
                    <label>Date of Birth</label>
                    <input type="date" name="date_of_birth" placeholder="Enter birth date" required>
                </div>

                <div class="input-field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-field">
                    <label>Mobile Number</label>
                    <input type="tel" name="mobile_number" placeholder="Enter mobile number" required>
                </div>

                <div class="input-field">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option disabled selected>Select gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>

                <div class="input-field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" required>
                </div>
            </div>
        </div>

        <div class="details ID">
            <span class="title">Bus Details</span>

            <div class="fields">
            
                <div class="input-field">
                    <label>Bus Number</label>
                    <input type="text" name="bus_number" placeholder="Enter Bus Number" required>
                </div>

            </div>

            <div class="fields">

                <div class="input-field">
                    <label>Company ID</label>
                    <input type="text" name="company_id" placeholder="Enter Company ID" required>
                </div>

            </div>

            <button type="submit" class="RegisterBtn">
                <span class="btnText">Register</span>
                <i class="uil uil-navigator"></i>
            </button>
        </div> 
    </div>
</form>

    
       
        

    </div>



    <script src="Assets/script.js"></script>
    
    
</body>
</html>
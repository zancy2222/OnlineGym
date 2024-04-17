<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator | Online Gym System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #2c723d;
        }

        .bmi-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-field {
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
            text-align: left;
        }

        .input-field label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        .input-field input {
            width: calc(100% - 40px); /* Adjusted width to account for icon */
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .input-field select{
            width: calc(105% - 40px); /* Adjusted width to account for icon */
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .input-field input:focus,
        .input-field select:focus {
            outline: none;
            border-color: #2c723d;
        }

        .icon {
            margin-right: 10px;
            color: #2c723d;
        }

        .calculate-btn {
            padding: 15px 40px;
            font-size: 18px;
            background-color: #2c723d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .calculate-btn:hover {
            background-color: #1e502c;
        }
        .calculate-btn .icon {
            color: #fff; /* Dark green color */
        }
        .back-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }

        .back-btn i {
            margin-right: 5px;
        }

        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BMI Calculator</h1>
        <form class="bmi-form" action="#" method="POST">
            <div class="input-field">
                <label for="age"><i class="fas fa-user icon"></i>Age</label>
                <input type="number" id="age" name="age" placeholder="Enter your age" required>
            </div>
            <div class="input-field">
                <label for="gender"><i class="fas fa-venus-mars icon"></i>Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected hidden>Select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="input-field">
                <label for="height"><i class="fas fa-ruler-vertical icon"></i>Height (cm)</label>
                <input type="number" id="height" name="height" placeholder="Enter your height" required>
            </div>
            <div class="input-field">
                <label for="weight"><i class="fas fa-weight icon"></i>Weight (kg)</label>
                <input type="number" id="weight" name="weight" placeholder="Enter your weight" required>
            </div>
            <button type="submit" class="calculate-btn"><i class="fas fa-calculator icon"></i>Calculate BMI</button>
        </form>
        <a href="Userpage.php" class="back-btn"><i class="fas fa-arrow-left"></i>Back</a>
    </div>
</body>
</html>

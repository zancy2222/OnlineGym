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

        .results {
            margin-top: 20px;
            text-align: left;
        }

        .bmi-value {
            font-size: 24px;
            font-weight: bold;
            color: #2c723d;
        }

        .bmi-category {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        #bmi-message {
            margin-top: 10px;
            color: #666;
        }

        .back-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .back-btn i {
            margin-right: 5px;
        }

        .back-btn:hover {
            background-color: #555;
        }
        .save-btn {
    padding: 15px 40px;
    font-size: 18px;
    background-color: #2c723d;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
}

.save-btn:hover {
    background-color: #1e502c;
}

.save-btn .icon {
    color: #fff; /* Dark green color */
}

    </style>
</head>
<body>
<div class="container">
        <h1>BMI Calculator</h1>
        <form class="bmi-form" action="../partials/bmi_process.php" method="POST">
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
            <button type="button" class="calculate-btn"><i class="fas fa-calculator icon"></i>Calculate BMI</button>
            <button type="submit" class="save-btn"><i class="fas fa-save icon"></i>Save</button>
            <!-- Removed 'Save' button -->
        </form>
        <!-- Results section -->
        <div id="results-container" style="display: none;">
            <div class="results">
                <span>Your BMI is: <span id="bmi-value" class="bmi-value"></span></span><br>
                <span class="bmi-category" id="bmi-category"></span>
            </div>
            <p id="bmi-message"></p>
        </div>
        <a href="Userpage.php" class="back-btn"><i class="fas fa-arrow-left"></i>Back</a>
    </div>

    <script>
        document.querySelector('.calculate-btn').addEventListener('click', function() {
            // Get input values
            const age = parseInt(document.getElementById('age').value);
            const gender = document.getElementById('gender').value;
            const height = parseInt(document.getElementById('height').value);
            const weight = parseInt(document.getElementById('weight').value);

            // Perform BMI calculation
            const heightInMeters = height / 100;
            const bmi = weight / (heightInMeters * heightInMeters);

            // Display results
            document.getElementById('bmi-value').textContent = bmi.toFixed(1);

            let category = '';
            if (bmi < 18.5) {
                category = 'Underweight';
            } else if (bmi >= 18.5 && bmi < 25) {
                category = 'Normal weight';
            } else if (bmi >= 25 && bmi < 30) {
                category = 'Overweight';
            } else {
                category = 'Obese';
            }
            document.getElementById('bmi-category').textContent = category;

            // Display message based on BMI category
            let message = '';
            if (category === 'Underweight') {
                message = 'You may need to gain some weight for better health.';
            } else if (category === 'Normal weight') {
                message = 'Your weight is within the healthy range. Keep it up!';
            } else if (category === 'Overweight') {
                message = 'You may need to lose some weight for better health.';
            } else {
                message = 'You may need to lose weight urgently for better health.';
            }
            document.getElementById('bmi-message').textContent = message;

            // Show results container
            document.getElementById('results-container').style.display = 'block';
        });
    </script>
</body>
</html>

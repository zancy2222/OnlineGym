<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workout | Online Gym System</title>
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
            max-width: 800px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #2c723d;
        }

        .workout-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .workout-section {
            width: calc(33.33% - 20px);
            margin-bottom: 40px;
        }

        .input-field {
            margin-bottom: 20px;
            width: 100%;
            text-align: left;
        }

        .input-field label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        .input-field input, .input-field select {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .input-field input:focus, .input-field select:focus {
            outline: none;
            border-color: #2c723d;
        }

        .icon {
            margin-right: 10px;
            color: #2c723d;
        }

        .submit-btn {
            padding: 15px 40px;
            font-size: 18px;
            background-color: #2c723d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #1e502c;
        }
        .submit-btn .icon{
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
        <h1>Create Workout</h1>
        <form class="workout-form" action="#" method="POST">
            <div class="workout-section">
                <h2>Cutting</h2>
                <div class="input-field">
                    <label for="cutName"><i class="fas fa-cut icon"></i>Name</label>
                    <input type="text" id="cutName" name="cutName" placeholder="Enter workout name for cutting" required>
                </div>
                <div class="input-field">
                    <label for="cutReps"><i class="fas fa-dumbbell icon"></i>Reps</label>
                    <input type="number" id="cutReps" name="cutReps" placeholder="Enter number of reps" required>
                </div>
                <div class="input-field">
                    <label for="cutDate"><i class="fas fa-calendar-alt icon"></i>Schedule Date</label>
                    <input type="date" id="cutDate" name="cutDate" required>
                </div>
                <div class="input-field">
                    <label for="cutTime"><i class="fas fa-clock icon"></i>Schedule Time</label>
                    <input type="time" id="cutTime" name="cutTime" required>
                </div>
            </div>

            <div class="workout-section">
                <h2>Bulking</h2>
                <div class="input-field">
                    <label for="bulkName"><i class="fas fa-dumbbell icon"></i>Name</label>
                    <input type="text" id="bulkName" name="bulkName" placeholder="Enter workout name for bulking" required>
                </div>
                <div class="input-field">
                    <label for="bulkReps"><i class="fas fa-dumbbell icon"></i>Reps</label>
                    <input type="number" id="bulkReps" name="bulkReps" placeholder="Enter number of reps" required>
                </div>
                <div class="input-field">
                    <label for="bulkDate"><i class="fas fa-calendar-alt icon"></i>Schedule Date</label>
                    <input type="date" id="bulkDate" name="bulkDate" required>
                </div>
                <div class="input-field">
                    <label for="bulkTime"><i class="fas fa-clock icon"></i>Schedule Time</label>
                    <input type="time" id="bulkTime" name="bulkTime" required>
                </div>
            </div>

            <div class="workout-section">
                <h2>Weight Loss</h2>
                <div class="input-field">
                    <label for="weightLossName"><i class="fas fa-dumbbell icon"></i>Name</label>
                    <input type="text" id="weightLossName" name="weightLossName" placeholder="Enter workout name for weight loss" required>
                </div>
                <div class="input-field">
                    <label for="weightLossReps"><i class="fas fa-dumbbell icon"></i>Reps</label>
                    <input type="number" id="weightLossReps" name="weightLossReps" placeholder="Enter number of reps" required>
                </div>
                <div class="input-field">
                    <label for="weightLossDate"><i class="fas fa-calendar-alt icon"></i>Schedule Date</label>
                    <input type="date" id="weightLossDate" name="weightLossDate" required>
                </div>
                <div class="input-field">
                    <label for="weightLossTime"><i class="fas fa-clock icon"></i>Schedule Time</label>
                    <input type="time" id="weightLossTime" name="weightLossTime" required>
                </div>
            </div>
            <button type="submit" class="submit-btn"><i class="fas fa-plus icon"></i>Create Workout</button>
        </form>
        <a href="Userpage.php" class="back-btn"><i class="fas fa-arrow-left"></i>Back</a>
    </div>
</body>
</html>

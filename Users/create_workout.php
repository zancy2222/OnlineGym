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
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #2c723d;
        }

        .options {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .option {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            border-radius: 10px;
            background-color: #2c723d;
            color: #fff;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .option:hover {
            background-color: #1e502c;
        }

        .option i {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .option-title {
            font-size: 18px;
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
        <div class="options">
            <a href="cut.php" class="option">
                <i class="fas fa-cut"></i>
                <div class="option-title">Cut</div>
            </a>
            <a href="bulk.php" class="option">
                <i class="fas fa-dumbbell"></i>
                <div class="option-title">Bulk</div>
            </a>
            <a href="weight_loss.php" class="option">
                <i class="fas fa-weight"></i>
                <div class="option-title">Weight Loss</div>
            </a>
        </div>
        <a href="Userpage.php" class="back-btn"><i class="fas fa-arrow-left"></i>Back</a>
    </div>
</body>
</html>

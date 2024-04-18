<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback | Online Gym System</title>
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

        .feedback-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-field {
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
        }

        .input-field label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
            text-align: left;
        }

        .input-field input,
        .input-field textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .input-field input:focus,
        .input-field textarea:focus {
            outline: none;
            border-color: #2c723d;
        }

        .input-field textarea {
            resize: vertical;
            min-height: 100px;
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
        <h1>Feedback Form</h1>
        <form class="feedback-form" action="../partials/save_feedback.php" method="POST">
    <div class="input-field">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="input-field">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="input-field">
        <label for="message">Your Feedback</label>
        <textarea id="message" name="message" placeholder="Enter your feedback" required></textarea>
    </div>
    <button type="submit" class="submit-btn"><i class="far fa-paper-plane"></i>Submit Feedback</button>
</form>

        <a href="Userpage.php" class="back-btn"><i class="fas fa-arrow-left"></i>Back</a>
    </div>
</body>
</html>

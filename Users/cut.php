<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cut Workout | Online Gym System</title>
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

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .form-group select{
            width: 104%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }
      
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .form-group select:focus, 
        .form-group input:focus {
            outline: none;
            border-color: #2c723d;
        }

        .icon {
            margin-right: 10px;
            color: #2c723d;
        }

        .schedule {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .schedule .form-group {
            flex: 1;
            margin-bottom: 20px;
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
        .submit-btn .icon{
            color: #fff;
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
    <form action="../partials/cut_process.php" method="POST">
        <h1>Choose Your Cut Workout</h1>
        <div class="form-group">
            <label for="workout"><i class="fas fa-dumbbell icon"></i>Choose Cut</label>
            <select id="workout" name="workout" onchange="updateSetsReps()">
                <option value="s">Select Cut</option>
                <option value="Barbell Squats">Barbell Squats</option>
                <option value="Romanian Deadlift">Romanian Deadlift</option>
                <option value="Pull Ups">Pull Ups</option>
                <option value="Incline Chest Press">Incline Chest Press</option>
                <option value="Lateral Raises">Lateral Raises</option>
                <option value="Plank">Plank</option>
                <option value="Crunches">Crunches</option>
                <option value="Barbell Bench Press">Barbell Bench Press</option>
                <option value="Chest Fly">Chest Fly</option>
                <option value="Barbell Lunges">Barbell Lunges</option>
                <option value="Barbell Overhead Press">Barbell Overhead Press</option>
                <option value="Tricep Push Downs">Tricep Push Downs</option>
                <option value="Bicep Curls">Bicep Curls</option>
                <option value="Bird Dog">Bird Dog</option>
                <option value="V-ups">V-ups</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sets"><i class="fas fa-layer-group icon"></i>Sets</label>
            <input type="text" id="sets" name="sets" readonly>
        </div>
        <div class="form-group">
            <label for="reps"><i class="fas fa-redo-alt icon"></i>Reps</label>
            <input type="text" id="reps" name="reps" readonly>
        </div>
        <div class="form-group">
                <label for="schedule-date"><i class="far fa-calendar-alt icon"></i>Schedule Date</label>
                <input type="date" id="schedule-date" name="schedule-date" required>
            </div>
        <div class="form-group">
                <label for="schedule-time"><i class="far fa-clock icon"></i>Schedule Time</label>
                <input type="time" id="schedule-time" name="schedule-time" required>
            </div>
        <button type="submit" class="submit-btn"><i class="fas fa-plus-circle icon"></i>Add Workout</button>
    </form>
    <a href="create_workout.php" class="back-btn"><i class="fas fa-arrow-left"></i>Back</a>
    </div>

    <script>
        function updateSetsReps() {
            const workout = document.getElementById('workout').value;
            const setsInput = document.getElementById('sets');
            const repsInput = document.getElementById('reps');

            switch(workout) {
                case 'Barbell Squats':
                    setsInput.value = '3 sets';
                    repsInput.value = '8-12 reps';
                    break;
                case 'Romanian Deadlift':
                    setsInput.value = '3 sets';
                    repsInput.value = '8-10 reps';
                    break;
                case 'Pull Ups':
                    setsInput.value = '2 sets';
                    repsInput.value = '8-12 reps';
                    break;
                case 'Incline Chest Press':
                    setsInput.value = '2 sets';
                    repsInput.value = '10-15 reps';
                    break;
                case 'Lateral Raises':
                    setsInput.value = '2 sets';
                    repsInput.value = '15 reps';
                    break;
                case 'Plank':
                case 'Crunches':
                    setsInput.value = '2 sets';
                    repsInput.value = '30-45 seconds';
                    break;
                case 'Barbell Bench Press':
                case 'Chest Fly':
                    setsInput.value = '3 sets';
                    repsInput.value = '8-12 reps';
                    break;
                case 'Barbell Lunges':
                    setsInput.value = '3 sets';
                    repsInput.value = '10 reps';
                    break;
                case 'Barbell Overhead Press':
                    setsInput.value = '2 sets';
                    repsInput.value = '8-10 reps';
                    break;
                case 'Tricep Push Downs':
                    setsInput.value = '3 sets';
                    repsInput.value = '15 reps';
                    break;
                case 'Bicep Curls':
                case 'Bird Dog':
                case 'V-ups':
                    setsInput.value = '2 sets';
                    repsInput.value = '12 reps';
                    break;
                    case 's':
                    setsInput.value = '0';
                    repsInput.value = '0';
                    break;    
                default:
                    setsInput.value = '';
                    repsInput.value = '';
            }
        }
    </script>

</body>
</html>

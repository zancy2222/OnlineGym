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
    <form action="../partials/weightloss_process.php" method="POST">
        <h1>Choose Your Weight Loss Workout</h1>
        <div class="form-group">
            <label for="exercise"><i class="fas fa-dumbbell icon"></i>Choose Exercise</label>
            <select id="exercise" name="exercise" onchange="updateSetsReps()">
                <option value="s">Select Exercise</option>
                <option value="Squats">Squats</option>
                <option value="Lunges">Lunges</option>
                <option value="Deadlifts">Deadlifts</option>
                <option value="Bench press">Bench press</option>
                <option value="Pull-ups">Pull-ups</option>
                <option value="Bent-over rows">Bent-over rows</option>
                <option value="Shoulder press">Shoulder press</option>
                <option value="Leg press">Leg press</option>
                <option value="Leg curls">Leg curls</option>
                <option value="Dumbbell step-ups">Dumbbell step-ups</option>
                <option value="Plank">Plank</option>
                <option value="Russian twists">Russian twists</option>
                <option value="Bicycle crunches">Bicycle crunches</option>
                <option value="Cable crunches">Cable crunches</option>
                <option value="Jump squats">Jump squats</option>
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
        <div class="schedule">
            <div class="form-group">
                <label for="schedule-date"><i class="far fa-calendar-alt icon"></i>Schedule Date</label>
                <input type="date" id="schedule-date" name="schedule-date" required>
            </div>
            
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
        const exercise = document.getElementById('exercise').value;
        const setsInput = document.getElementById('sets');
        const repsInput = document.getElementById('reps');

        switch(exercise) {
            case 'Squats':
            case 'Bench press':
            case 'Shoulder press':
            case 'Leg press':
            case 'Leg curls':
            case 'Plank':
            case 'Cable crunches':
                setsInput.value = '3 sets';
                repsInput.value = '12 reps';
                break;
            case 'Lunges':
                setsInput.value = '3 sets';
                repsInput.value = '10 reps per leg';
                break;
            case 'Deadlifts':
            case 'Bent-over rows':
                setsInput.value = '3 sets';
                repsInput.value = '10 reps';
                break;
            case 'Pull-ups':
                setsInput.value = '3 sets';
                repsInput.value = '8 reps';
                break;
            case 'Dumbbell step-ups':
                setsInput.value = '3 sets';
                repsInput.value = '10 reps per leg';
                break;
            case 'Russian twists':
            case 'Bicycle crunches':
                setsInput.value = '3 sets';
                repsInput.value = '15 reps per side';
                break;
            case 'Jump squats':
                setsInput.value = '3 sets';
                repsInput.value = '15 reps';
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

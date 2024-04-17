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
    <form action="bulk.php" method="POST">
        <h1>Choose Your Bulk Workout</h1>
        <div class="form-group">
            <label for="day"><i class="far fa-calendar-alt icon"></i>Select Day</label>
            <select id="day" name="day" onchange="updateWorkout()">
                <option value="s">Select Day</option>
                <option value="Day 1: Push or Chest">Day 1: Push or Chest</option>
                <option value="Day 2: Pull or Back">Day 2: Pull or Back</option>
                <option value="Day 3: Leg">Day 3: Leg</option>
                <option value="Day 4: Push o Chest">Day 4: Push o Chest</option>
                <option value="Day 5: Pull or Back">Day 5: Pull or Back</option>
                <option value="Day 6: Leg">Day 6: Leg</option>
                <option value="Day 7: Rest">Day 7: Rest</option>
            </select>
        </div>
        <div class="form-group">
            <label for="workout"><i class="fas fa-dumbbell icon"></i>Workout</label>
            <select id="workout" name="workout" readonly>
                <option value="s">Select Workout</option>
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
    function updateWorkout() {
        const day = document.getElementById('day').value;
        const workoutSelect = document.getElementById('workout');
        const setsInput = document.getElementById('sets');
        const repsInput = document.getElementById('reps');

        switch(day) {
            case 'Day 1: Push or Chest':
                workoutSelect.innerHTML = `<option value="Push Barbell bench press">Push Barbell bench press</option>
                                          <option value="Barbell military press">Barbell military press</option>
                                          <option value="Dumbbell incline press">Dumbbell incline press</option>
                                          <option value="Dumbbell lateral raises">Dumbbell lateral raises</option>
                                          <option value="Dumbbell tricep extensions">Dumbbell tricep extensions</option>`;
                setsInput.value = '3 sets';
                repsInput.value = '8-12 reps';
                break;
            case 'Day 2: Pull or Back':
                workoutSelect.innerHTML = `<option value="Pull Barbell deadlifts">Pull Barbell deadlifts</option>
                                          <option value="Barbell bent over rows">Barbell bent over rows</option>
                                          <option value="Lat pulldowns">Lat pulldowns</option>
                                          <option value="Dumbbell upright rows">Dumbbell upright rows</option>
                                          <option value="Dumbbell single arm bicep curls">Dumbbell single arm bicep curls</option>`;
                setsInput.value = '3 sets';
                repsInput.value = '8-12 reps';
                break;
            case 'Day 3: Leg':
                workoutSelect.innerHTML = `<option value="Legs Barbell squats">Legs Barbell squats</option>
                                          <option value="Bulgarian split squat">Bulgarian split squat</option>
                                          <option value="Leg press">Leg press</option>
                                          <option value="Leg extensions">Leg extensions</option>
                                          <option value="Standing calf raises">Standing calf raises</option>`;
                setsInput.value = '3 sets';
                repsInput.value = '8-12 reps';
                break;
            case 'Day 4: Push o Chest':
                workoutSelect.innerHTML = `<option value="Push Push ups">Push Push ups</option>
                                          <option value="Barbell incline bench press">Barbell incline bench press</option>
                                          <option value="Dumbbell shoulder press">Dumbbell shoulder press</option>
                                          <option value="Tricep pushdowns">Tricep pushdowns</option>`;
                setsInput.value = '3 sets';
                repsInput.value = '8-12 reps';
                break;
            case 'Day 5: Pull or Back':
                workoutSelect.innerHTML = `<option value="Pull Pull ups">Pull Pull ups</option>
                                          <option value="Seated cable row">Seated cable row</option>
                                          <option value="Face pulls">Face pulls</option>
                                          <option value="Barbell bicep curl">Barbell bicep curl</option>
                                          <option value="Barbell good mornings">Barbell good mornings</option>`;
                setsInput.value = '3 sets';
                repsInput.value = '8-12 reps';
                break;
            case 'Day 6: Leg':
                workoutSelect.innerHTML = `<option value="Legs Goblet squats">Legs Goblet squats</option>
                                          <option value="Lunges">Lunges</option>
                                          <option value="Hip thrust">Hip thrust</option>
                                          <option value="Romanian deadlifts">Romanian deadlifts</option>
                                          <option value="Glute kickbacks">Glute kickbacks</option>`;
                setsInput.value = '3 sets';
                repsInput.value = '8-12 reps';
                break;
            case 'Day 7: Rest':
                workoutSelect.innerHTML = `<option value="Rest">Rest</option>`;
                setsInput.value = '0';
                repsInput.value = '0';
                break;
            default:
                workoutSelect.innerHTML = `<option value="s">Select Workout</option>`;
                setsInput.value = '';
                repsInput.value = '';
        }
    }
</script>

</body>
</html>

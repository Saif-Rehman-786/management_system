<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: index.php");
    exit;
}

include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];  // Assuming user_id is stored in the session
    $doctor_id = $_POST['doctor_id'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];

    // Insert the appointment data into the database
    $query = "INSERT INTO appointments (user_id, doctor_id, appointment_date, appointment_time, status) 
              VALUES ('$user_id', '$doctor_id', '$appointment_date', '$appointment_time', 'Pending')";
    
    if (mysqli_query($conn, $query)) {
        // Redirect to the dashboard or appointments page
        header("Location: userpanel/dashboard.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Book Appointment</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="doctor_id" class="form-label">Doctor</label>
                <select class="form-select" name="doctor_id" required>
                    <?php
                    // Fetch available doctors from the database
                    $doctor_query = "SELECT * FROM doctors";
                    $doctor_result = mysqli_query($conn, $doctor_query);
                    while ($doctor = mysqli_fetch_assoc($doctor_result)) {
                        echo "<option value='" . $doctor['id'] . "'>" . $doctor['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="appointment_date" class="form-label">Appointment Date</label>
                <input type="date" class="form-control" name="appointment_date" required>
            </div>

            <div class="mb-3">
                <label for="appointment_time" class="form-label">Appointment Time</label>
                <input type="time" class="form-control" name="appointment_time" required>
            </div>

            <button type="submit" class="btn btn-primary">Book Appointment</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

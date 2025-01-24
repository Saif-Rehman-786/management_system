<?php
session_start();
include("db_connect.php"); 


if (!isset($_SESSION['patient_id']) || empty($_SESSION['patient_id'])) {
    die("Patient ID is not available. Please log in.");
}

$patient_id = $_SESSION['patient_id'];


$appointment_date = $appointment_time = $doctor_id = $description = ''; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $appointment_date = $_POST['appointment_date'] ?? '';
    $appointment_time = $_POST['appointment_time'] ?? '';
    $doctor_id = $_POST['doctor_id'] ?? '';
    $description = $_POST['description'] ?? '';

    // Validate inputs
    if (empty($appointment_date) || empty($appointment_time) || empty($doctor_id) || empty($description)) {
        $error_message = "All fields are required!";
    } else {
       
        $query = "INSERT INTO appointments (patient_id, doctor_id, appointment_date, appointment_time, description) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iisss", $patient_id, $doctor_id, $appointment_date, $appointment_time, $description);

        if ($stmt->execute()) {
      
            echo "<script>alert('Appointment booked successfully!'); window.location.href = 'history.php';</script>";
            exit();
        } else {
            $error_message = "Error: " . $conn->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
 


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .card-body {
            padding: 2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .appointments-list li {
            background-color: #ffffff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .appointments-list li strong {
            color: #007bff;
        }

        footer {
            background-color: #343a40;
            color: white;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Book Appointment</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <!-- Appointment Booking Form -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <h3 class="card-title mb-3">Book an Appointment</h3>
                    <form method="post" action="book_appointment.php">
                        <div class="mb-3">
                            <label for="doctor" class="form-label">Select Doctor</label>
                            <select id="doctor" name="doctor_id" class="form-select" required>
                                <option value="1">Dr. Smith</option>
                                <option value="2">Dr. Johnson</option>
                                <!-- Add more doctors here -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Select Date</label>
                            <input type="date" id="date" name="appointment_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Select Time</label>
                            <input type="time" id="time" name="appointment_time" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Problem/Issue</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Describe your problem"
                                rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 w-100">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>



    <footer class="text-center py-4">
        <p>&copy; 2025 Hospital Management System. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

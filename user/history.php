<?php
session_start();
include("db_connect.php"); // Database connection

// Check if patient_id exists in session
if (!isset($_SESSION['patient_id']) || empty($_SESSION['patient_id'])) {
    die("Patient ID is not available. Please log in.");
}

$patient_id = $_SESSION['patient_id']; // Get patient_id from session

// Fetch patient appointments
$query = "SELECT a.appointment_date, a.appointment_time, d.name AS doctor_name, a.description
          FROM appointments a
          JOIN doctors d ON a.doctor_id = d.id
          WHERE a.patient_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment History</title>
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
            <a class="navbar-brand" href="#">Appointment History</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h3>Your Appointment History</h3>
        <?php if ($result->num_rows > 0): ?>
            <ul class="appointments-list">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li>
                        <strong>Doctor:</strong> <?php echo $row['doctor_name']; ?><br>
                        <strong>Date:</strong> <?php echo $row['appointment_date']; ?><br>
                        <strong>Time:</strong> <?php echo $row['appointment_time']; ?><br>
                        <strong>Description:</strong> <?php echo $row['description']; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No appointments found.</p>
        <?php endif; ?>
    </div>

    <footer class="text-center py-4">
        <p>&copy; 2025 Hospital Management System. All rights reserved.</p>
    </footer>
</body>

</html>

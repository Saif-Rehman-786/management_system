<?php
session_start();
if (!isset($_SESSION['doctor_logged_in'])) {
    header("Location: doctor_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #003366;
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
        }

        .sidebar a:hover {
            background-color: #00509e;
        }

        .sidebar .active {
            background-color: #00509e;
        }

        .top-bar {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 20px;
        }

        .main-content {
            padding: 20px;
        }

        .profile-btn {
            background-color: #0056b3;
            color: white;
            font-size: 14px;
        }

        .profile-btn:hover {
            background-color: #003366;
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .offcanvas {
                background-color: #003366;
                color: white;
            }

            .offcanvas a {
                color: white;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar d-md-block">
                <h4 class="text-center py-3">Doctor Panel</h4>
                <a href="doctor_dashboard.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
                <a href="view_appointments.php"><i class="fas fa-calendar-alt"></i> View Appointments</a>
                <a href="patient_records.php"><i class="fas fa-user-injured"></i> Patient Records</a>
                <a href="prescriptions.php"><i class="fas fa-file-medical"></i> Prescriptions</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>

            <!-- Main Content -->
            <div class="col-md-10">
                <!-- Top Bar -->
                <div class="top-bar d-flex justify-content-between align-items-center">
                    <h5>Welcome, Dr. John Doe</h5>
                    <a href="update_profile.php" class="btn profile-btn"><i class="fas fa-user-edit"></i> Update Profile</a>
                </div>

                <!-- Dashboard Content -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                                    <h5>Appointments</h5>
                                    <p>Manage your appointments.</p>
                                    <a href="view_appointments.php" class="btn btn-primary btn-sm">View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-user-injured fa-3x text-danger mb-3"></i>
                                    <h5>Patient Records</h5>
                                    <p>Access patient history and details.</p>
                                    <a href="patient_records.php" class="btn btn-danger btn-sm">View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <i class="fas fa-file-medical fa-3x text-success mb-3"></i>
                                    <h5>Prescriptions</h5>
                                    <p>Generate and manage prescriptions.</p>
                                    <a href="prescriptions.php" class="btn btn-success btn-sm">Manage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


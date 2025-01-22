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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            overflow-x: hidden;
        }
        .sidebar {
            background-color: #343a40;
            color: white;
            min-height: 100vh;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
            text-decoration: none;
        }
        .navbar {
            background-color: #007bff;
            color: white;
        }
        .content {
            padding: 20px;
        }
        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                width: 250px;
                left: -250px;
                transition: 0.3s;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                padding-top: 60px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="btn btn-light d-lg-none me-3" id="toggleSidebar">☰</button>
            <a class="navbar-brand" href="#">Doctor Dashboard</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 sidebar" id="sidebar">
                <h4 class="text-center">Doctor Panel</h4>
                <a href="#">Dashboard</a>
                <a href="#">View Appointments</a>
                <a href="#">Manage Patients</a>
                <a href="#">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
            <!-- Main Content -->
            <div class="col-lg-10 content">
                <h4>Welcome, Doctor</h4>
                <p>This is the doctor dashboard. Here, you can manage appointments, view patient details, and update your profile.</p>
            </div>
        </div>
    </div>

    <script>
        // Sidebar toggle for small screens
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        });
    </script>
</body>
</html>

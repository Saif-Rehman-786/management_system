
<?php
session_start();
if (!isset($_SESSION['patient_id'])) {
    header("Location: login.php");
    exit();
}
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* General styles */
    body {
        background-color: #f8f9fa;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .navbar {
        background-color: #007bff;
    }

    .navbar-brand,
    .nav-link {
        color: white !important;
    }

    .sidebar {
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        width: 250px;
        background-color: #343a40;
        padding-top: 20px;
    }

    .sidebar a {
        padding: 15px 20px;
        text-decoration: none;
        font-size: 18px;
        color: #ffffff;
        display: block;
    }

    .sidebar a:hover {
        background-color: #007bff;
    }

    .main-content {
        margin-left: 250px;
        padding: 20px;
        flex-grow: 1;
    }

    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 10px 0;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .sidebar {
            position: relative;
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .sidebar a {
            flex: 1 1 auto;
            padding: 10px;
            text-align: center;
            font-size: 16px;
        }

        .main-content {
            margin-left: 0;
        }

        .card {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 576px) {
        .sidebar a {
            font-size: 14px;
            padding: 8px;
        }

        .card {
            padding: 10px;
        }

        .navbar-brand {
            font-size: 18px;
        }
    }
</style>

</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="book_appointment.php">Book Appointment</a>
        <a href="history.php">Appointment History</a>

        <a href="logout.php" class="text-danger">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">User Dashboard</span>
        </nav>

        <div class="container mt-4">
            <h1>User | Dashboard</h1>
            <p class="text-muted">Easily manage your appointments and profile.</p>

            <div class="row mt-4">
                <!-- Book Appointment -->
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        <h3 class="card-title">Book an Appointment</h3>
                        <form method="post" action="book_appointment.php">
                            <div class="mb-3">
                                <label for="doctor" class="form-label">Select Doctor</label>
                                <select id="doctor" name="doctor" class="form-select">
                                    <option value="Dr. Smith">Dr. Smith</option>
                                    <option value="Dr. Johnson">Dr. Johnson</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Select Date</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Select Time</label>
                                <input type="time" id="time" name="time" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Problem/Issue</label>
                                <textarea class="form-control" id="description" name="description"
                                    placeholder="Describe your problem" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Book Appointment</button>
                        </form>
                    </div>
                </div>

                <!-- Appointment History -->
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        <h3 class="card-title">Appointment History</h3>
                        <p>View your past appointments.</p>
                        <a href="history.php" class="btn btn-outline-primary">View History</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Hospital Management System. All rights reserved.</p>
    </footer>

    <script>
        // Replace with the actual user name from PHP session
        document.getElementById('user-name').textContent = '<?php echo $_SESSION["user_name"] ?? "User"; ?>';
    </script>
</body>

</html>

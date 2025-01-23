<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
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

        .logout {
            color: white;
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Dashboard</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Welcome, <span id="user-name">[User Name]</span>!</h1>
                <p class="text-muted">Manage your profile, view appointments, and more.</p>
            </div>
        </div>

        <div class="row mt-4">
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
                            <label for="description">Problem/Issue</label>
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Describe your problem" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Book Appointment</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <h3 class="card-title">Your Appointments</h3>
                    <ul class="list-group" id="appointment-list">
                        <li class="list-group-item">No appointments found.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Hospital Management System. All rights reserved.</p>
    </footer>

    <script>
        // Replace with the actual user name from PHP session
        document.getElementById('user-name').textContent = '<?php echo $_SESSION["user_name"] ?? "User"; ?>';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
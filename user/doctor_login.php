<?php
session_start();
if (isset($_POST['loginbtn'])) {
    $doctor_email = $_POST['email'];
    $doctor_password = $_POST['password'];

    // Hardcoded login for simplicity
    if ($doctor_email === "doctor@gmail.com" && $doctor_password === "doctor@12") {
        $_SESSION['doctor_logged_in'] = true;
        header("Location: doctor_dashboard.php");
        exit;
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #f8f9fa; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="text-center mb-3">Doctor Login</h3>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="doctor@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="doctor@12" required>
            </div>
            <button type="submit" name="loginbtn" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>

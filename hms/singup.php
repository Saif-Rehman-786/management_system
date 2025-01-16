<?php 






?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .registration-form {
            background: #ffffff;
            border-radius: 10px;
            padding: 40px; /* Increased padding for a more spacious look */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        .registration-form h2 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            padding-left: 45px;
            height: 45px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-control::placeholder {
            color: #aaaa; /* Lightened placeholder text */
            
        }
        .input-group-text {
            background: #f1f1f1;
            border: none;
            color:rgb(121, 129, 137);
            border-right: 1px solid #ddd;
        }
        .form-check-label {
            font-size: 14px;
        }
        .btn-primary {
            background: #007bff;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .form-actions a {
            color: #007bff;
            text-decoration: none;
        }
        .form-actions a:hover {
            text-decoration: underline;
        }
        .form-check-inline {
            margin-right: 15px;
        }
        .text-muted {
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="registration-form">
        <h2>User Registration</h2>
        <form id="registration" method="post">
            <!-- Full Name -->
            <div class="form-group input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
            </div>
            <!-- Address -->
            <div class="form-group input-group">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
            <!-- City -->
            <div class="form-group input-group">
                <span class="input-group-text"><i class="fas fa-city"></i></span>
                <input type="text" class="form-control" name="city" placeholder="City" required>
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label class="form-label">Gender</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <!-- Password -->
            <div class="form-group input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <!-- Confirm Password -->
            <div class="form-group input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password_again" placeholder="Confirm Password" required>
            </div>
            <!-- Agreement -->
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="agree" value="agree">
                <label class="form-check-label" for="agree">I agree to the terms and conditions</label>
            </div>
            <!-- Submit -->
            <div class="form-actions">
                <p class="text-muted">Already have an account? <a href="login.php">Log in</a></p>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

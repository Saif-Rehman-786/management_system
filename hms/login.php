<?php
include("dbconnection");
session_start();






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .login-card {
            background: #fff;
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-card h5 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
        }

        .login-card p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-control {
            padding-left: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .input-group-text {
            background: transparent;
            border: none;
            font-size: 18px;
            color: #6c757d;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .login-footer {
            color: #666;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            font-size: 14px;
            text-align: right;
            margin-bottom: 10px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h5>Sign in to your account</h5>
        <p>Please enter your name and password to log in.</p>
        <form action="login.php" method="POST">
            <!-- Username Field -->
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <!-- Password Field -->
            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <!-- Forgot Password -->
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="loginbtn">Login</button>
            </div>
        </form>
        <div class="login-footer">
            <p>Don't have an account yet? <a href="singup.php">Create an account</a></p>
        </div>
    </div>

    <?php 
    if(isset($_POST['loginbtn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $q = "SELECT `name`, `password`, `confirmpassword` FROM `user` WHERE ";
    }
    
    
    
    
    
    
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
include("dbconnection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['fname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gen'];
    $email = $_POST['email'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Secure password hashing

    $query = "INSERT INTO patient (name, address, city, gender, email, password) 
              VALUES ('$name', '$address', '$city', '$gender', '$email', '$password')";

    if ($conn->query($query)) {
        echo "<script>alert('Account created successfully!'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            max-width: 90%;
        }

        h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #003366;
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-group i {
            position: absolute;
            left: 10px;
            top: 65%;
            transform: translateY(-50%);
            color: #003366;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #001f4d;
        }

        p {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        p a {
            color: #003366;
            text-decoration: none;
            font-weight: bold;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Register as a Patient</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="fname">Full Name</label>
                <i class="fas fa-user"></i>
                <input type="text" id="fname" name="fname" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <i class="fas fa-city"></i>
                <input type="text" id="city" name="city" placeholder="Enter your city" required>
            </div>
            <div class="form-group">
                <label for="gen">Gender</label>
                <i class="fas fa-venus-mars"></i>
                <select id="gen" name="gen" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="cpass">Confirm Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="cpass" name="cpass" placeholder="Confirm your password" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>

</html>

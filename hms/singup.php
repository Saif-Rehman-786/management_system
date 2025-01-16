<?php
if (isset($_POST['sub'])) {
    echo "<script>alert('ok')</script>";
}



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hospital Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 320px;
            max-width: 90%;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            color: #003366;
            font-size: 18px;
        }

        .form-group {
            margin-bottom: 10px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 3px;
            font-weight: bold;
            font-size: 12px;
            color: #003366;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group select {
            width: 100%;
            padding: 8px 8px 8px 35px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 12px;
        }

        .form-group i {
            position: absolute;
            left: 10px;
            top: 65%;
            transform: translateY(-50%);
            color: #003366;
            font-size: 14px;
        }

        #submitt {
            background-color: #003366;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 14px;
        }

        p {
            margin-top: 10px;
            font-size: 12px;
            text-align: center;
            color: #666;
        }

        p a {
            color: #003366;
            text-decoration: none;
            font-weight: bold;
        }

        p a:hover {
            text-decoration: underline;
            color: #001f4d;
        }


        #submitt:hover {
            background-color: #001f4d;
        }


        @media (max-width: 500px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Patient Registration</h2>
        <form method="post">
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <i class="fas fa-user"></i>
                <input type="text" id="full_name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" id="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <i class="fas fa-city"></i>
                <input type="text" id="city" placeholder="Enter your city" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <i class="fas fa-venus-mars"></i>
                <select id="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="confirm_password" placeholder="Confirm your password" required>



            </div>
            <p>Already have an account?<a href="">Login</a></p>
       <input type="submit" name="sub" id="submitt">
        </form>
    </div>
</body>

</html>
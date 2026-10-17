<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
    {

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="signup-container">

        <h1>Create Account</h1>
        <p class="subtitle">Enter your information to register</p>

        <form action="signup.php" method="POST">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile"
                       placeholder="Enter your mobile number">
            </div>

            <h3>Full Name</h3>

            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname"
                       placeholder="First name">
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name"
                       placeholder="Middle name">
            </div>

            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname"
                       placeholder="Last name">
            </div>

            <div class="form-group">
                <label for="family_name">Family Name</label>
                <input type="text" id="family_name" name="family_name"
                       placeholder="Family name">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                       placeholder="Create a password">
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password"
                       name="confirm_password"
                       placeholder="Confirm your password">
            </div>

            <h3>Date of Birth</h3>

            <div class="date-group">

                <div class="form-group">
                    <label for="day">Day</label>
                    <input type="number" id="day" name="day"
                           placeholder="DD">
                </div>

                <div class="form-group">
                    <label for="month">Month</label>
                    <input type="number" id="month" name="month"
                           placeholder="MM">
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" id="year" name="year"
                           placeholder="YYYY">
                </div>

            </div>

            <button type="submit" class="signup-button">
                Sign Up
            </button>

            <p class="form-footer">
                Already have an account?
                <a href="login.php">Login</a>
            </p>

        </form>

    </div>

</body>
</html>
<?php
require_once "includes/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | PawCare</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body class="auth-page">

    <header class="top-bar">
        <span class="brand-icon">🐾</span>
        <span>PawCare – Pet Shop and Veterinary Service Management System</span>

        <div class="window-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <main class="registration-container">

        <section class="registration-card">

            <div class="registration-brand">

               <div class="registration-logo">
                    <img src="assets/images/petLogo.jpeg" alt="PawCare Logo">
               </div>

                <h3><span>🐾</span> PAWCARE</h3>

            </div>

            <div class="registration-heading">
                <h1>Join the Pet Family</h1>
                <p>Create your account to access premium pet care</p>
            </div>

            <form action="" method="POST" id="registrationForm">

                <div class="form-grid">

                    <div class="form-group">
                        <label for="full_name">Full Name</label>

                        <input
                            type="text"
                            id="full_name"
                            name="full_name"
                            placeholder="Enter your full name"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="username">Choose Username</label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Choose a username"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="example@email.com"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="01XXXXXXXXX"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="password">Set Password</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter password"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="address">Home Address</label>

                        <input
                            type="text"
                            id="address"
                            name="address"
                            placeholder="Please enter exact delivery address"
                            required>
                    </div>

                </div>

                <button type="submit" class="create-account-btn">
                    Create Account
                </button>

            </form>

            <p class="login-link">
                Already have an account?
                <a href="login.php">Login here</a>
            </p>

        </section>

    </main>

    <footer class="footer">
        🐾 "Pets are not our whole life..." | PawCare © 2026
    </footer>

    <script src="assets/js/main.js"></script>
</body>

</html>
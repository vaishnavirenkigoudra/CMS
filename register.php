<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .btn-primary {
            background-color: #f8b864;
            border: none;
        }
        .btn-primary:hover {
            background-color: #f8b864;
        }
        .form-label {
            font-weight: bold;
            color: #333333;
        }
        .header-title {
            color: #f8b864;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Register</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <form id="registerForm" action="register_process.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="number" name="number" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
                            <small class="form-text text-muted">Enter a 10-digit phone number.</small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" minlength="6" required>
                            <small class="form-text text-muted">Password must be at least 6 characters long.</small>
                        </div>
                        <div class="mb-3">
                            <label for="captcha" class="form-label">CAPTCHA</label>
                            <div class="d-flex align-items-center">
                                <span id="captchaText" class="me-3 p-2 bg-light border rounded">
                                    <?php
                                    session_start();
                                    $captcha = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 6);
                                    $_SESSION['captcha'] = $captcha;
                                    echo $captcha;
                                    ?>
                                </span>
                                <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Enter CAPTCHA" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
                    </form>
                    <p class="text-center mt-3">Already have an account? <a href="login.html" class="text-primary">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
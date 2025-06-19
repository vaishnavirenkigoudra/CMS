<?php
// update_password.php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcomplaint";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $new_password = $_POST['new_password'] ?? '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($new_password)) {
        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Prepare and execute update query
        $stmt = $conn->prepare("UPDATE users SET password=? WHERE email=?");
        $stmt->bind_param('ss', $hashed_password, $email);

        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo "<div style='
                margin:60px auto;
                max-width:400px;
                background:#fff;
                border-radius:12px;
                box-shadow:0 2px 16px rgba(44,62,80,0.10);
                padding:32px 24px;
                text-align:center;
                font-family:sans-serif;
            '>
                <h4 style='color:#27ae60;margin-bottom:18px;'>Password updated successfully.</h4>
                <a href='login.html' style='
                    display:inline-block;
                    margin-top:10px;
                    padding:8px 24px;
                    background:linear-gradient(90deg,#007bff 60%,#0056b3 100%);
                    color:#fff;
                    border-radius:6px;
                    text-decoration:none;
                    font-weight:600;
                    letter-spacing:0.5px;
                    box-shadow:0 2px 8px rgba(0,123,255,0.08);
                '>Go to Login</a>
            </div>";
        } else {
            echo "<div style='
                margin:60px auto;
                max-width:400px;
                background:#fff;
                border-radius:12px;
                box-shadow:0 2px 16px rgba(44,62,80,0.10);
                padding:32px 24px;
                text-align:center;
                font-family:sans-serif;
            '>
                <h4 style='color:#c0392b;margin-bottom:18px;'>Failed to update password. Check the email address.</h4>
                <a href='reset_password.html?email=" . urlencode($email) . "' style='
                    display:inline-block;
                    margin-top:10px;
                    padding:8px 24px;
                    background:linear-gradient(90deg,#ffc107 60%,#ff9800 100%);
                    color:#212529;
                    border-radius:6px;
                    text-decoration:none;
                    font-weight:600;
                    letter-spacing:0.5px;
                    box-shadow:0 2px 8px rgba(255,193,7,0.08);
                '>Try Again</a>
            </div>";
        }
        $stmt->close();
    } else {
        echo "<div style='
            margin:60px auto;
            max-width:400px;
            background:#fff;
            border-radius:12px;
            box-shadow:0 2px 16px rgba(44,62,80,0.10);
            padding:32px 24px;
            text-align:center;
            font-family:sans-serif;
        '>
            <h4 style='color:#c0392b;margin-bottom:18px;'>Invalid email or password.</h4>
            <a href='reset_password.html' style='
                display:inline-block;
                margin-top:10px;
                padding:8px 24px;
                background:linear-gradient(90deg,#ffc107 60%,#ff9800 100%);
                color:#212529;
                border-radius:6px;
                text-decoration:none;
                font-weight:600;
                letter-spacing:0.5px;
                box-shadow:0 2px 8px rgba(255,193,7,0.08);
            '>Try Again</a>
        </div>";
    }
}
?>


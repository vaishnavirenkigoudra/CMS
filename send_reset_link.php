<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (empty($email)) {
        exit("Email is required.");
    }

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcomplaint";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }

    // Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $reset_link = "http://localhost/CMS/reset_password.html?email=" . urlencode($email);

        // Show the link directly for local testing with enhanced CSS
        echo "<div style='
            margin:60px auto;
            max-width:420px;
            background:#fff;
            border-radius:14px;
            box-shadow:0 4px 24px rgba(44,62,80,0.13);
            padding:36px 28px;
            text-align:center;
            font-family:sans-serif;
        '>
            <h3 style='color:#1a237e;margin-bottom:18px;'>Password Reset Link</h3>
            <p style='color:#333;margin-bottom:22px;'>Click the button below to reset your password:</p>
            <a href='$reset_link' class='btn btn-primary' style='
                display:inline-block;
                padding:10px 28px;
                background:linear-gradient(90deg,#007bff 60%,#0056b3 100%);
                color:#fff;
                border-radius:6px;
                text-decoration:none;
                font-weight:600;
                letter-spacing:0.5px;
                box-shadow:0 2px 8px rgba(0,123,255,0.08);
                margin-bottom:10px;
            '>Reset Password</a>
        </div>";
    } else {
        echo "<div style='
            margin:60px auto;
            max-width:420px;
            background:#fff;
            border-radius:14px;
            box-shadow:0 4px 24px rgba(44,62,80,0.13);
            padding:36px 28px;
            text-align:center;
            font-family:sans-serif;
        '>
            <h3 style='color:#c0392b;margin-bottom:18px;'>Email not found.</h3>
            <a href='forgot_password.html' class='btn btn-warning mt-3' style='
                display:inline-block;
                padding:10px 28px;
                border-radius:6px;
                font-weight:600;
                letter-spacing:0.5px;
                text-decoration:none;
                margin-top:10px;
            '>Try Again</a>
        </div>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
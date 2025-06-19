<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcomplaint"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Fetch user from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Start session and store user information
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to index.html
            header("Location: complaint.html");
            exit();
        } else {
            echo "<div style='
                margin:60px auto;
                max-width:400px;
                background:#fff;
                border-radius:10px;
                box-shadow:0 2px 16px rgba(44,62,80,0.10);
                padding:32px 24px;
                text-align:center;
                font-family:sans-serif;
            '>
                <h4 style='color:#c0392b;margin-bottom:18px;'>Invalid password.</h4>
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
                '>Try again</a>
            </div>";
        }
    } else {
        echo "No user found with this email. <a href='register.html'>Register here</a>";
    }
}

$conn->close();
?>
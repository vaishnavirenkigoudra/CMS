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
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password. <a href='login.html'>Try again</a>";
        }
    } else {
        echo "No user found with this email. <a href='register.html'>Register here</a>";
    }
}

$conn->close();
?>
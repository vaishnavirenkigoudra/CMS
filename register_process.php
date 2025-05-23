<?php
session_start();

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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $number = $conn->real_escape_string($_POST['number']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security
    $captchaInput = $_POST['captcha'];

    // Validate CAPTCHA
    if ($captchaInput !== $_SESSION['captcha']) {
        die("CAPTCHA validation failed. Please try again.");
    }

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        die("Email already exists. Please use a different email.");
    }

    // Insert user into the database
    $sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$number', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='login.html'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
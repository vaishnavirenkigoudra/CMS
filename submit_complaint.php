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
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $details = $conn->real_escape_string($_POST['details']);

    // SQL query to insert data into the complaints table
    $sql = "INSERT INTO complaints (name, email, phone, subject, details) 
            VALUES ('$name', '$email', '$phone', '$subject', '$details')";

    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
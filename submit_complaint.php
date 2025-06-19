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
    $location = $conn->real_escape_string($_POST['location']);
    $pincode = $conn->real_escape_string($_POST['pincode']);
    $state = $conn->real_escape_string($_POST['state']);
    $country = $conn->real_escape_string($_POST['country']);
    $city = $conn->real_escape_string($_POST['city']);

    // SQL query to insert data into the complaints table
    $sql = "INSERT INTO complaints (name, email, phone, subject, details, location, city, pincode, state, country) 
            VALUES ('$name', '$email', '$phone', '$subject', '$details', '$location', '$city', '$pincode', '$state', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo '<div style="margin:40px auto;max-width:400px;padding:20px;background:#e6f9ed;border:1px solid #b2dfdb;border-radius:8px;color:#218838;font-size:1.2rem;text-align:center;">
                <i class="fas fa-check-circle" style="color:#28a745;font-size:2rem;"></i><br>
                Complaint submitted successfully!<br>
                <a href="complaint_status.php" style="display:inline-block;margin-top:15px;" class="btn btn-primary">Check Complaint Status</a>
              </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
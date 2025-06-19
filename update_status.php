<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcomplaint"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = intval($_POST['id']);
    // If checkbox is checked, set to 'solved', else 'unsolved'
    $status = isset($_POST['status']) && $_POST['status'] === 'solved' ? 'solved' : 'unsolved';

    $sql = "UPDATE complaints SET status='$status' WHERE id=$id";
    $conn->query($sql);

    $conn->close();
}

// Redirect back to the complaints table
header("Location: complaints_table.php");
exit;
?>
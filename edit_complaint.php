<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcomplaint"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM complaints WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $complaint = $result->fetch_assoc();
    } else {
        die("Complaint not found.");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $details = $conn->real_escape_string($_POST['details']);

    $sql = "UPDATE complaints SET name = '$name', email = '$email', phone = '$phone', subject = '$subject', details = '$details' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: complaints_table.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Complaint</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Edit Complaint</h1>
        <form method="POST" action="edit_complaint.php">
            <input type="hidden" name="id" value="<?php echo $complaint['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $complaint['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $complaint['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $complaint['phone']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $complaint['subject']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <textarea class="form-control" id="details" name="details" rows="4" required><?php echo $complaint['details']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="complaints_table.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
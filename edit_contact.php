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
    $sql = "SELECT * FROM contact_messages WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $message = $result->fetch_assoc();
    } else {
        die("Message not found.");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message_content = $conn->real_escape_string($_POST['message']);

    $sql = "UPDATE contact_messages SET name = '$name', email = '$email', phone = '$phone', subject = '$subject', message = '$message_content' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: display_contacts.php");
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
    <title>Edit Contact Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Edit Contact Message</h1>
        <form method="POST" action="edit_contact.php">
            <input type="hidden" name="id" value="<?php echo $message['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $message['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $message['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $message['phone']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $message['subject']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required><?php echo $message['message']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="display_contacts.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
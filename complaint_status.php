<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Complaint Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #e3f0ff 60%, #f4faff 100%);
            min-height: 100vh;
        }
        .status-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(44, 62, 80, 0.10);
            padding: 40px 30px 30px 30px;
            max-width: 600px;
            margin: 60px auto 0 auto;
        }
        h2 {
            font-weight: 700;
            color: #37517e;
            margin-bottom: 24px;
        }
        .form-control, .btn {
            border-radius: 8px;
        }
        .table {
            background: #f8fafc;
            border-radius: 12px;
            overflow: hidden;
        }
        .table th {
            background: #4e73df;
            color: #fff;
            border: none;
        }
        .table td {
            vertical-align: middle;
        }
        .alert-warning {
            border-radius: 8px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
<div class="status-container">
    <h2>Check Your Complaint Status</h2>
    <form method="post">
        <input type="email" name="email" class="form-control mb-3" placeholder="Enter your Gmail" required>
        <button type="submit" class="btn btn-primary w-100">Check Status</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "dbcomplaint");
        $email = $conn->real_escape_string($_POST['email']);
        $result = $conn->query("SELECT subject, details, status, created_at FROM complaints WHERE email='$email' ORDER BY created_at DESC");
        if ($result->num_rows > 0) {
            echo "<table class='table mt-4'><tr><th>Date</th><th>Subject</th><th>Details</th><th>Status</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['created_at']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['details']}</td>
                        <td>{$row['status']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='alert alert-warning mt-4 text-center'>No complaints found for this email.</div>";
        }
        $conn->close();
    }
    ?>
    <button type="button" class="btn btn-secondary w-100" onclick="window.location.href='complaint.html'">Back to Complaint Form</button>
</div>
</body>
</html>
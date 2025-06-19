<?php
// Simple officer list and add form
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcomplaint";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $conn->query("INSERT INTO officers (name, email, phone) VALUES ('$name', '$email', '$phone')");
}

$officers = $conn->query("SELECT * FROM officers");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%);
            min-height: 100vh;
        }
        .container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 32px rgba(44, 62, 80, 0.10);
            padding: 40px 30px;
            margin-top: 40px;
        }
        h2 {
            color: #1a237e;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }
        .form-control, .btn {
            border-radius: 6px;
        }
        .btn-primary {
            background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
            border: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(0,123,255,0.08);
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .btn-secondary {
            margin-top: 20px;
        }
        .table {
            margin-bottom: 0;
            border-radius: 8px;
            overflow: hidden;
            background: #f9fafb;
        }
        .table th {
            background: #212529;
            color: #fff;
            letter-spacing: 1px;
            font-size: 1.08rem;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #f2f6fc;
        }
        .table-bordered {
            border-radius: 8px;
            overflow: hidden;
        }
        .table th, .table td {
            vertical-align: middle !important;
            font-size: 1.03rem;
        }
        @media (max-width: 768px) {
            .container {
                padding: 12px 2px;
            }
            h2 {
                font-size: 1.4rem;
            }
            .table th, .table td {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
<div class="container my-5">
    <h2>Officer Management</h2>
    <form method="POST" class="mb-4">
        <div class="row g-2">
            <div class="col"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
            <div class="col"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
            <div class="col"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
            <div class="col"><button class="btn btn-primary" type="submit">Add Officer</button></div>
        </div>
    </form>
    <table class="table table-bordered">
        <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php while($row = $officers->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= htmlspecialchars($row['name'])?></td>
                <td><?= htmlspecialchars($row['email'])?></td>
                <td><?= htmlspecialchars($row['phone'])?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
</div>
</body>
</html>
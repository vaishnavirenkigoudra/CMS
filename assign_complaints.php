<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcomplaint";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complaint_id'], $_POST['officer_id'])) {
    $complaint_id = intval($_POST['complaint_id']);
    $officer_id = intval($_POST['officer_id']);
    $conn->query("UPDATE complaints SET officer_id = $officer_id WHERE id = $complaint_id");
}

$complaints = $conn->query("SELECT c.*, o.name AS officer_name FROM complaints c LEFT JOIN officers o ON c.officer_id = o.id");
$officers = $conn->query("SELECT * FROM officers");
$officer_list = [];
while($row = $officers->fetch_assoc()) $officer_list[] = $row;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assign Complaints to Officers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 40px 30px;
            margin-top: 40px;
        }
        h2 {
            color: #343a40;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .table th {
            background: #343a40;
            color: #fff;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .form-select, .btn {
            border-radius: 6px;
        }
        .btn-primary {
            background: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .btn-secondary {
            margin-top: 20px;
        }
        .text-danger {
            font-weight: 500;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <h2>Assign Complaints to Officers</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Complaint ID</th>
                <th>Subject</th>
                <th>Assigned Officer</th>
                <th>Assign</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $complaints->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= htmlspecialchars($row['subject'])?></td>
                <td><?= $row['officer_name'] ? htmlspecialchars($row['officer_name']) : '<span class="text-danger">Unassigned</span>' ?></td>
                <td>
                    <form method="POST" class="d-flex">
                        <input type="hidden" name="complaint_id" value="<?= $row['id'] ?>">
                        <select name="officer_id" class="form-select form-select-sm me-2" required>
                            <option value="">Select Officer</option>
                            <?php foreach($officer_list as $officer): ?>
                                <option value="<?= $officer['id'] ?>" <?= $row['officer_id'] == $officer['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($officer['name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <button class="btn btn-sm btn-primary" type="submit">Assign</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
</div>
</body>
</html>
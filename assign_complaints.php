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
        .table {
            margin-bottom: 0;
            border-radius: 8px;
            overflow: hidden;
            background: #f9fafb;
            box-shadow: 0 2px 12px rgba(44, 62, 80, 0.06);
        }
        .table th {
            background: #343a40;
            color: #fff;
            letter-spacing: 1px;
            font-size: 1.08rem;
            border-bottom: 2px solid #007bff;
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
        .form-select, .btn {
            border-radius: 6px;
        }
        .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.15);
        }
        .btn-primary {
            background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
            border: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(0,123,255,0.08);
            transition: background 0.2s;
        }
        .btn-primary:hover {
            background: #0056b3;
        }
        .btn-secondary {
            margin-top: 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .text-danger {
            font-weight: 500;
        }
        form.d-flex {
            gap: 0.5rem;
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
            .btn, .form-select {
                font-size: 0.95rem;
            }
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
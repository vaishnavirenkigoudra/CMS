<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints Table</title>
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
            padding: 40px 28px;
            margin-top: 40px;
        }
        h1 {
            font-size: 2.4rem;
            font-weight: 700;
            color: #1a237e;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }
        .btn-primary.mb-4 {
            background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
            border: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 2px 8px rgba(0,123,255,0.08);
        }
        .btn-warning, .btn-danger {
            margin-right: 4px;
        }
        .table {
            margin-bottom: 0;
            border-radius: 8px;
            overflow: hidden;
            background: #f9fafb;
        }
        .table thead th {
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
        .form-check-input:checked {
            background-color: #28a745;
            border-color: #28a745;
        }
        .status-unsolved {
            color: #c0392b;
            font-weight: 600;
        }
        .status-solved {
            color: #27ae60;
            font-weight: 600;
        }
        .table td form {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .table td .btn {
            padding: 0.25rem 0.7rem;
            font-size: 0.95rem;
        }
        @media (max-width: 768px) {
            .container {
                padding: 12px 2px;
            }
            h1 {
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
        <a href="dashboard.php" class="btn btn-primary mb-4">Back to Dashboard</a>
        <h1 class="mb-4">Complaints List</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>State</th>  
                    <th>Country</th>
                    <th>Subject</th>
                    <th>Details</th>
                    <th>Date Submitted</th>
                    <th>Officer Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
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

                // Fetch complaints from the database
                $sql = "select c.id AS id,c.name As name,c.email As email,c.phone As phone,c.location As Location,c.city As City,c.pincode As Pincode,c.state As State,c.country As Country, c.subject As subject,c.details As details,c.created_at As created_at,o.name As officer_name,c.status As status from complaints as c left JOIN officers as o on c.officer_id=o.id ORDER BY c.created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $checked = $row['status'] === 'solved' ? 'checked' : '';
                        $statusText = $row['status'] === 'solved' ? 'Solved' : 'Unsolved';
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['Location']}</td>
                                <td>{$row['City']}</td>
                                <td>{$row['Pincode']}</td>
                                <td>{$row['State']}</td>
                                <td>{$row['Country']}</td>
                                <td>{$row['subject']}</td>
                                <td>{$row['details']}</td>
                                <td>{$row['created_at']}</td>
                                <td>{$row['officer_name']}</td>
                                <td>
                                    <form method='post' action='update_status.php' style='display:inline;'>
                                        <input type='hidden' name='id' value='{$row['id']}'>
                                        <input type='checkbox' name='status' value='solved' $checked onchange='this.form.submit()'>
                                        <span class='ms-2'>$statusText</span>
                                    </form>
                                </td>
                                <td>
                                    <a href='edit_complaint.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete_complaint.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this complaint?\")'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' class='text-center'>No complaints found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            min-height: 230px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .card i {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .card h5 {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .card p {
            flex: 1;
            text-align: center;
        }
        .row.g-4 > [class^="col-"] {
            display: flex;
        }
        .card .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">CMS Dashboard</h4>
        <a href="#dashboard"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        <a href="complaints_table.php"><i class="fas fa-tasks me-2"></i> Manage Complaints</a>
        <a href="display_contacts.php"><i class="fas fa-users me-2"></i> User Management</a>
        <a href="officers.php"><i class="fas fa-user-shield me-2"></i> Officer Management</a>
        <a href="assign_complaints.php"><i class="fas fa-user-tag me-2"></i> Assign Complaints</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1 class="mb-4">Dashboard</h1>

        <!-- Cards Section -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card bg-primary text-white p-4 w-100">
                    <i class="fas fa-tasks"></i>
                    <h5>Manage Complaints</h5>
                    <p>View and resolve complaints efficiently.</p>
                    <a href="complaints_table.php" class="btn btn-light btn-sm">Go to Module</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card bg-success text-white p-4 w-100">
                    <i class="fas fa-users"></i>
                    <h5>User Management</h5>
                    <p>Manage users and their roles.</p>
                    <a href="display_contacts.php" class="btn btn-light btn-sm">Go to Module</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card bg-info text-white p-4 w-100">
                    <i class="fas fa-user-shield"></i>
                    <h5>Officer Management</h5>
                    <p>Add and manage officers.</p>
                    <a href="officers.php" class="btn btn-light btn-sm">Go to Module</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card bg-warning text-white p-4 w-100">
                    <i class="fas fa-user-tag"></i>
                    <h5>Assign Complaints</h5>
                    <p>Assign complaints to officers.</p>
                    <a href="assign_complaints.php" class="btn btn-light btn-sm">Go to Module</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
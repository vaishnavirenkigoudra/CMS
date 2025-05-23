<?php
session_start();
$login_error = "";

// Fixed admin credentials
$fixed_username = "admin";
$fixed_password = "Vaishu@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_user = $_POST['username'];
    $admin_pass = $_POST['password'];

    if ($admin_user === $fixed_username && $admin_pass === $fixed_password) {
        $_SESSION['admin_id'] = 1;
        $_SESSION['admin_username'] = $fixed_username;
        header("Location: dashboard.php");
        exit();
    } else {
        $login_error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4 text-center">Admin Login</h2>
            <?php if ($login_error): ?>
                <div class="alert alert-danger"><?php echo $login_error; ?></div>
            <?php endif; ?>
            <form method="POST" action="admin_login.php">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
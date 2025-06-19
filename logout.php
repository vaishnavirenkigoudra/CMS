<<<<<<< HEAD
<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page or homepage
header("Location: index.php");
exit;
=======
<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page or homepage
header("Location: index.php");
exit;
>>>>>>> 1d34ab5ec8b0d4a927e060e3a8be9d39ef1cd46b
?>
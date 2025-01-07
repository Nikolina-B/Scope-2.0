<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the home page (or login page) after logout
header('Location: index.php');
exit();
?>

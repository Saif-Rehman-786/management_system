<?php
session_start();

// Destroy the session
session_unset();
session_destroy();


// Redirect to the login page (index.php in the same folder)
header("Location: hospital_managment/user/index.php"); // Absolute path from the root of the project
exit;
?>

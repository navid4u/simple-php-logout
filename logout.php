//remember first you have to have created a session , afterwards youe would be able to use this code
<?php
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other desired page
header("Location: login.php");
exit;
?>

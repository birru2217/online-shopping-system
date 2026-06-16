<?php
session_start();

// remove session variables
unset($_SESSION["uid"]);
unset($_SESSION["name"]);

// destroy session
session_destroy();

// redirect to home page
header("Location: index.php");
exit();
?>
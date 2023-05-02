<?php
session_start();
session_destroy();
echo '<script>alert("Logged out successfully. You will be redirected to Log In page.");
        window.location.href = "login.php";</script>';
        exit();
?>

<!-- 
Miskat Mahmud 
ID: 40250110
SOEN 287- Winter 2023
Assignment 03
Concordia University
Date:  15 April 2023  -->

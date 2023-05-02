<?php
// <!-- 
// Miskat Mahmud 
// ID: 40250110
// SOEN 287- Winter 2023
// Assignment 03
// Concordia University
// Date:  15 April 2023 
// -->
date_default_timezone_set('America/Montreal');
$present_time = date('D M j H:i:s T Y');
$expiry = time() + (86400 * 60); 

$counter = 1; 

if (isset($_COOKIE["LastVisit"])) {
    if (isset($_COOKIE["VisitCount"])) {
        $counter = $_COOKIE["VisitCount"] + 1;
    }
    setcookie("LastVisit", $present_time, $expiry);
    setcookie("VisitCount", $counter, $expiry);
    echo "Hello, this is the " . $counter . " time that you are visiting my webpage.<br>";
    echo "Last time you visited my webpage on: " . $_COOKIE["LastVisit"];
} else {
    setcookie("LastVisit", $present_time, $expiry);
    setcookie("VisitCount", $counter, $expiry);
    echo "Welcome to my webpage! It is your first time that you are here.";
}

?>

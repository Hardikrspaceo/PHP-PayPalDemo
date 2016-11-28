<?php
//Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'ur48x';
$dbName = 'paypal';
//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>

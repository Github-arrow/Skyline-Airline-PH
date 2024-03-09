<?php
session_start();

include_once './config/database.php';

if (!isset($_SESSION['username'])) {
    // Redirect to login page if user is not authenticated
    header("/Github_Repository/Group_Skyline_Airways/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyline - Dashboard</title>
    <link rel="icon" href="./assets/images/favicon.jpg">
</head>
<body>
    
</body>
</html>

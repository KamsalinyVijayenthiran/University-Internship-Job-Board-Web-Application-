<?php

    session_start();
    if(!isset($_SESSION['email'])) {
        header("Location: LoginRegister.php");
        exit();
    }

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link rel="stylesheet" href="company_dashboard.css">
    <link rel="stylesheet" href="loginRegister.css">
</head>

<body style = "background-color: #fff;">
    








    <div class="dashboard-container">
        <h1>Welcome, <span><?= $_SESSION['name']; ?>!</span></h1>
        <p>This is the <span>company dashboard.</span></p>
        <button onclick="window.location.href='Logout.php'">Logout</button>
    </div>
</body>
</html>
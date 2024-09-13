<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Mitr' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Matemasie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>
<body>
<h1>Registration Form</h1>
<div class="container">
    <form action="info.php" method="get">
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="age">Age:</label>
        <input type="age" id="password" name="age" required>
        <br>
        <label for="YearLevel">YearLevel:</label>
        <input type="YearLevel" id="YearLevel" name="YearLevel" required>
        <br>
        <label for="StudentNumber">StudentNumber:</label>
        <input type="StudentNumber" id="StudentNumber" name="StudentNumber" required>
        <br>

        <input type="submit" value="Register">
       
    </form>
</div>
<script src="scripts.js"></script>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'N/A';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'N/A';
$password = isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'N/A'; 
$age = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : 'N/A';
$yearlevel = isset($_GET['YearLevel']) ? htmlspecialchars($_GET['YearLevel']) : 'N/A';
$studentnumber = isset($_GET['StudentNumber']) ? htmlspecialchars($_GET['StudentNumber']) : 'N/A';

 } else {
        echo "Invalid request method.";
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="info.css">
</head>

<nav class="navbar" id="navbar">
<a href="Login.php"><b>Login</b></a>
<a href="index.php" id="features"><b>Home</b></a>
</nav>

<body>
    <div class="container">
        <h1>User Information</h1>
        <p><strong>Username:</strong> <?php echo $username; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Password:</strong> <?php echo $password; ?></p>
        <p><strong>Age:</strong> <?php echo $age; ?></p>
        <p><strong>YearLevel:</strong> <?php echo $yearlevel; ?></p>
        <p><strong>StudentNumber:</strong> <?php echo $studentnumber; ?></p>
        
    </div>

    <script src="scripts.js"></script>

</body>
</html>

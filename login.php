<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>




<div id="login-overlay" class="login-overlay">
    <div class="login-form">
        <h2>Login</h2>
        <form id="loginForm">
           
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div class="button-container">
                
            <a href="index.php">
            <button type="button">Login</button>
            
            </div>
        </form>
    </div>
</div>


<script src="scripts.js"></script>

</body>
</html>

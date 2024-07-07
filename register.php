<?php
include "layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="loginstyle/style1.css">
</head>
<body>
<header>
    <h1>Sign Up</h1>
</header>
<div class="container">
    <div class="card">
        <form action="signup_process.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        <p>Already have an account? <a href="loginpage.php">Log in</a></p>
    </div>
</div>
</body>
</html>
<?php
include "layout/footer.php";
?>

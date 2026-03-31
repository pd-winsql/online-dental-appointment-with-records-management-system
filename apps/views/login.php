<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-module</title>
    <link rel="stylesheet" href="../../public/css/login-reg.css">
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST" class="login-form">
            <h2>Login to Your Account</h2>
            <div class="form-group">
                <label for="username">Username or Email</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-primary">Login</button>
            <div style="text-align:center; margin-top: 16px;">
            <span>Don't have an account? </span>
            <a href="register.php" style="color: var(--primary-color); text-decoration: underline;">Register</a>
        </div>
        </form>
        
    </div>
</body>
</html>
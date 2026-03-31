<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="../../public/css/login-reg.css">
</head>
<body>
    <div class="login-container">
        <form action="register.php" method="POST" class="login-form">
            <h2>Create an Account</h2>
            <div class="form-group">
                <label for="reg-username">Username</label>
                <input type="text" id="reg-username" name="username" required>
            </div>
            <div class="form-group">
                <label for="reg-email">Email</label>
                <input type="email" id="reg-email" name="email" required>
            </div>
            <div class="form-group">
                <label for="reg-password">Password</label>
                <input type="password" id="reg-password" name="password" required>
            </div>
            <button type="submit" class="btn-primary">Register</button>
            <div style="text-align:center; margin-top: 16px;">
                <span>Already have an account? </span>
                <a href="login.php" style="color: var(--primary-color); text-decoration: underline;">Login</a>
            </div>
        </form>
    </div>
</body>
</html>

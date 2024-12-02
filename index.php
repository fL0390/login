<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <div class="rgb-bar"></div>
    <div class="login-box">
        <form method="POST" action="./php/validate.php">
            <div class="input-container">
                <input type="text" name="username" id="username" class="input" placeholder=" " required>
                <label for="username" class="label">Username</label>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" class="input" placeholder=" " required>
                <label for="password" class="label">Password</label>
            </div>
            <p class="register-button">If you don't have an account, create one <a href="./php/register.php">here</a></p>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="./scripts/script.js"></script>
</body>
</html>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = htmlspecialchars($_GET['username']);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Logged In</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="rgb-bar"></div>
    <h1>Welcome <?php echo $username; ?>!</h1>
    <p>You logged in successfully.</p>
</body>
</html>


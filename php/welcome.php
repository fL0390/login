<?php
session_start();

//Comprova si la variable de 'username' existeix, sino, vol dir que l'usuari no ha iniciat sessio i el redirigeix a 'login.php'.
if (!isset($_SESSION['username'])) { 
    header("Location: login.php"); 
    exit;
}

//Si l'usuari ha iniciat sessió, aquest hi agafara el valor que hi te i el guarda en la variable.
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
    <form action="./logout.php" method="post">
        <h1>Welcome <?php echo $username; ?>!</h1> <!--Imprimeix el valor guardat en pantalla-->
        <p>You logged in successfully.</p>
        <button type="submit">Log out</button>
    </form>
    </div>
</body>
</html>


<?php
session_start(); //Inicia la sessio PHP

$users = [ //Array amb els usuaris i les seves contrasenyes
    'admin' => 'admin'
];

$username = $_POST['username']; //Agafa el 'username' del POST i li assigna una variable
$password = $_POST['password']; //Agafa la contrasenya del POST i li asigna una variable


if (isset($users[$username]) && $users[$username] === $password) { //Comprova si l'usuari i la contrasenya existeixen
    $_SESSION['username'] = $username; //Si el resultat es valid, el guarda en una variable de sessió.
    header("Location: ./welcome.php?username=" . $username); //Envia a l'usuari a la pagina 'welcome.php', seguit del nom de usuari en el link
    exit; //Para el script una vegada redirigit l'usuari
} else {
    header("Location: ./error.php"); //Si l'usuari o contrasenya no son valids, redirigeixen a l'usuari a la pagina 'error.php'.
    exit; //Para el script una vegada redirigit l'usuari
}
?>

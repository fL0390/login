<?php
session_start(); //Inicia la sessio de PHP.

unset($_SESSION["username"]);//Borra la variable de la sessio.

session_destroy();//Destrueix la sessio.

header("Location: ../login.php");//Retorna l'usuari a la pagina 'login.php'.
exit;
?>
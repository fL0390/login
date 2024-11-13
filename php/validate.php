<?php
session_start();

$users = [
    'admin' => 'admin'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header("Location: ./welcome.php?username=" . $username);
    exit;
} else {
    header("Location: ./error.php");
    exit;
}
?>

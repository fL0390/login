<?php
session_start();

$users = [
    'user1' => 'password1'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header("Location: ./welcome.php?username=" . $username);
    exit;
} else {
    header("Location: ./login.php?error=invalid_credentials");
    exit;
}
?>

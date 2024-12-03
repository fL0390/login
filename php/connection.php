<?php
$servername = "i3qa.xyz";
$username = "flaviu";
$password = "flaviucristian200403";
$dbname = "login_m9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

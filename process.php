<?php
session_start();

$correct_username = 'Lai Man Yee';
$correct_password = '105996175';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $correct_username && $password === $correct_password) {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;

} else {
header('Location: login.php?error=invalid');
 exit;
}
?>
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "deepmoon");

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username'");
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['username'] = $username;
  header("Location: forum.html");
} else {
  echo "Giriş başarısız!";
}
?>

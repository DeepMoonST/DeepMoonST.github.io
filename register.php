<?php
$conn = new mysqli("localhost", "root", "", "deepmoon");

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
echo "Kayıt başarılı!";
?>

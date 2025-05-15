<?php
$conn = new mysqli("localhost", "root", "", "deepmoon");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  $user = $_SESSION['username'] ?? 'Anonim';
  $message = $_POST['message'];
  $conn->query("INSERT INTO forum (username, message) VALUES ('$user', '$message')");
}

$result = $conn->query("SELECT * FROM forum ORDER BY id DESC");
while($row = $result->fetch_assoc()) {
  echo "<p><strong>{$row['username']}:</strong> {$row['message']}</p>";
}
?>

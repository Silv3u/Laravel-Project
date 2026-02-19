<?php
$conn = new mysqli("localhost", "root", "", "auth_app");
if ($conn->connect_error) {
  die("DB connection failed");
}

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if ($password !== $confirm) {
  die("Passwords do not match");
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (fullName, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $fullName, $email, $hashed);

if ($stmt->execute()) {
  echo "Registered successfully ";
} else {
  echo "Email already exists ";
}

$stmt->close();
$conn->close();
?>

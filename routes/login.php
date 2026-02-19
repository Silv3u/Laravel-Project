<?php
$conn = new mysqli("localhost", "root", "", "auth_app");
if ($conn->connect_error) {
  die("DB connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
  $stmt->bind_result($hashed);
  $stmt->fetch();

  if (password_verify($password, $hashed)) {
    echo "Login successful ";
  } else {
    echo "Wrong password ";
  }
} else {
  echo "User not found ";
}

$stmt->close();
$conn->close();
?>

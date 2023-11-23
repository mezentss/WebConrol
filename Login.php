<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вход</title>
</head>
<body>
  <h1>Вход</h1>
  <form action="Login.php" method="post">
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit">Войти</button>
  </form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "00000000";
$dbname = "webcontrol";

$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: Main.php");
    exit();
  } else {
    echo "Неверное имя пользователя или пароль";
  }

$conn->close();
?>

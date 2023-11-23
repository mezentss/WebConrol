<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
</head>
<body>
  <h1>Регистрация</h1>
  <form action="Registration.php" method="post">
    <input type="text" name="username" placeholder="Имя пользователя" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit">Зарегистрироваться</button>
  </form>
</body>
</html>

<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "00000000";
$dbname = "webcontrol";

$conn = new mysqli($servername, $username, $password, $dbname);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($result->num_rows > 0) {
    header("Location: Main.php");
    exit();
  } else {
    echo "Ошибка регистрации";
  }

$conn->close();
?>

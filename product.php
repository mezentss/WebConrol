<?php
$servername = "localhost";
$username = "root";
$password = "00000000";
$dbname = "webcontrol";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die(":(");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Информация о продукте</title>
  <link rel="stylesheet" href="slyles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="Main.php">Главная</a></li>
        <li><a href="Shop.php">Магазин</a></li>
        <li><a href="Contact.php">Контакты</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php
      $productId = $_GET['id']; 
      $sql = "SELECT * FROM flowers JOIN count ON flowers.id = count.id WHERE flowers.id = $productId";
      $productInfo = $conn->query($sql)->fetch(PDO::FETCH_ASSOC); 
      echo "<h2>" . $productInfo['description'] . "</h2>";
      echo "<p>Цена: " . $productInfo['price'] . "</p>";
      echo "<p>Характеристики: " . $productInfo['characteristics'] . "</p>";
      echo "<p>Количество в наличии: " . $productInfo['quantity'] . "</p>";
      echo "<img src='" . $productInfo['photo'] . "'>";
      
    ?>
  </main>
  <footer>
    <p>&copy; 2023 Магазин Цветов</p>
  </footer>
</body>
</html>

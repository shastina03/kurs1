<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Comptable" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>О нас</title>
</head>
<body>
    <?php require "blocks/header.php" ?>

<div class="container mt-5">
  <p class="mb-3 " style="margin-top:50px">Наш офис находится по адресу: Санкт-Петербург, 2 линия В.О. д.37</p><br>
  <p>КОНТАКТНЫЙ ЦЕНТР: 8 (333)-555-77-99</p><br>
  <p>НАША ПОЧТА: rostelecom@gmail.com</p>
  <script type="text/javascript" charset="utf-8"  async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa2321fbcc0d367b3c3aca1de71b19053f04db19d0600fc3069e0eed3218caad5&amp;width=800&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
  <h3 class="mb-5 " style="margin-top:50px">Напишите нам, если хотите что-то уточнить.</h3>
<form action="check.php" method="post">
  <input type="email" name="email" placeholder="Введите email"
  class="form-control"><br>
  <textarea name="message" class="form-control"
  placeholder="Введите ваше сообщение"></textarea><br>
  <button type="submit" name="send" class="btn btn-success" >Отправить</button>
</form>
</div>
<?php require "blocks/footer.php"?>
</body>
</html>

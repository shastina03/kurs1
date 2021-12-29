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
    <title>WAYUP - образовательная платформа</title>
</head>
<body>
    <?php require "blocks/header.php" ?>

<div class="container mt-5">

  <?php
if($_COOKIE['user'] == ''):
   ?>
  <h1 style="margin-left:42%">Регистрация</h1>
  <form action="check2.php" method="post"style="width:500px; margin-left:30%">
    <input type="text" class="form-control" name="login"
     placeholder="Введите логин"><br>
    <input type="text" class="form-control" name="name"
     placeholder="Введите имя"><br>
    <input type="text" class="form-control" name="password"
     placeholder="Введите пароль"><br>
    <button class="btn btn-success"style="width: 500px"
    type="submit" >Зарегистрироваться</button>
  </form>
<?php else: ?>
  <p>Привет <?=$_COOKIE['user']?>.Чтобы выйти нажмите <a
  href="exit.php">здесь</a>.</p>
<?php endif; ?>
</div>
<?php require "blocks/footer.php"?>
</body>
</html>

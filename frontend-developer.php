<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Comptable" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src='http://code.jquery.com/jquery-2.1.1.min.js'></script>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>2 в 1. Оптимальный</title>
</head>
<body>
    <?php require "blocks/header.php" ?>

<div class="container mt-5">
  <div class="offer">
            <h1>2 в 1 Оптимальный 2.0</h1>
            <h1>Что может быть включено в тариф?</h1>
            <p>Интернет последнего поколения. Скорость - 200 Мбит/с. Технология - FTTb. Mаршрутизатор FTTx с опцией WI-FI свыше 100 мб (Medium).Скорость интернета: до 1 Гбит/с Количество подключаемых устройств: 16, радиус действия внутри помещения: 100 м</p>


            <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-price="719 рублей/месяц " data-product="Т2 в 1 Оптимальный 2.0">
              Купить
            </button>
<h1></h1>
<img src="img/tarif2_pic.png" alt="WAYUP" align="right" class="image1">
        </div>
</div>

<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оформление заказа</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="check5.php" id="buy" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Ваше имя</label>
      <input type="name" class="form-control" id="name" aria-describedby="emailHelp" name="name" required>

    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>

    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Телефон</label>
      <input type="phone" class="form-control" id="phone" aria-describedby="emailHelp" name="phone" required>

    </div>
    <div class="mb-3">
      <label for="product" class="form-label">Выбранная услуга</label>
      <input type="text" class="form-control" id="product" aria-describedby="emailHelp" name="product"
      readonly>

    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Цена</label>
      <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price"
      readonly>
    </div>
    <button type="submit" class="btn btn-primary">Оформить заказ</button>
  </form>
      </div>

    </div>
  </div>
</div>
<?php require "blocks/footer.php"?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>
</html>

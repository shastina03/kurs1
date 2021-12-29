
<?php
$mysql = new mysqli ('localhost','root','','register-bg');
$name = $_COOKIE['user'];
$result = mysqli_query($mysql, "SELECT `product`, `price` FROM `orders` WHERE '$name' = `name`");
?>
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

            <h2 style="margin-left:10%">Мои заказы</h2><br>


<div class="d-flex flex-wrap">
<?php
            while( $food = mysqli_fetch_assoc($result))
            {
            ?>
            <div class="card mb-4 rounded-3 shadow-sm" style="width: 18rem;">
            <div  method="post" class="card-body">
              <h5 class="card-title">Заказ</h5>
              <p class="card-text">Тариф: <?php echo $food['product']; echo "<br>"?>К оплате: <?php echo $food['price'];
                echo "<br>";?></p>

              
            </div>
          </div>
          <br>
<?php
            };
?>
</div>







</form>
</div>

<?php require "blocks/footer.php"?>
</body>
</html>

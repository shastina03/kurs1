<div class="container ">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
      <img src="https://shop.rt.ru/local/templates/main/images/logo_ros.svg" alt="WAYUP" class="logo" style="margin-top:10px">
    </a>
    <nav class="d-inline-flex mt-2 mt-md-2 ms-md-auto ">
      <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Главная</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="curses.php">Все тарифы</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="about.php">О нас</a>
      <?php if ($_COOKIE['user'] !=''):?>
      <a class="me-3 py-2 text-dark text-decoration-none" href="zakaz.php">Мои заказы</a>
        <?php endif; ?>

    </nav>
  <?php if ($_COOKIE['user'] !=''):?>
      <a class="btn btn-outline-primary mt-md-2" href="exit.php">Выйти</a>
      <p style="margin:6px; margin-top:15px" >Привет, <?=$_COOKIE['user']?></p>
  <?php else: ?>
    <a class="btn btn-outline-primary mt-md-2" href="reg.php">Войти</a>
    <a class="btn btn-outline-primary ms-md-2 mt-2" href="enter.php">Регистрация</a>
  <?php endif; ?>
  </div>
</div>

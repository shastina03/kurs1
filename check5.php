<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);

$phone = filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);

$product = filter_var(trim($_POST['product']),
FILTER_SANITIZE_STRING);

$price = filter_var(trim($_POST['price']),
FILTER_SANITIZE_STRING);

if (empty($_POST['name'])) {
    echo 'Пожалуйста введите имя';
    exit(); }
else if (empty($_POST['email'])) {
    echo 'Пожалуйста введите email';
    exit();
} else  if(empty($_POST['phone'])) {
    echo 'Пожалуйста введите телефон';
  exit();
}

$mysql = new mysqli ('localhost','root','','register-bg');


$mysql->query("INSERT INTO `orders` (`name`,`email`,`phone`,`product`,`price`)
VALUES('$name', '$email', '$phone','$product','$price')");


$mysql->close();

header('Location: frontend-developer.php');
?>

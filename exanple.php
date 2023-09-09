<?php
session_start();
if ($_SESSION['role'] == NULL){
 // echo "У Вас нет прав доступа. Войдите или зарегистрируйтесь.";
  header('Location: /index.php');
  exit;
}
if ($_SESSION['role'] == "admin"){
echo "<div><h1>Вы успешно вошли как администратор;<h1><div>";
}
if ($_SESSION['role'] !== "admin"){
  echo "<div><h1>Вы успешно вошли как клиент;<h1><div>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>PHP Пример </title>
  <link rel="stylesheet" href = "/CSS/style.css">
</head>
<body>
<?php include "menu.inc.php"?>
<h1>Пример авторизации</h1>
<div class="container">

<h1 class="text-center">Варианты установки блоков Bootstrap по середине</h1>

<div class="row">

<h2 class="text-center">Выравнивание по центру пустыми блоками</h2>

<div class="col-md-4"></div><!--Пустой блок с права-->
<div class="col-md-4">
<?php
if ($_SESSION['role'] == 'admin'){
  echo "<img src = '/img/devushka.jpg' width = '500px' />";
}
?>
<!--<img src="http://drawings-girls.ucoz.net/2015/07/devushka-elf-s-malenkim-drakonom.jpg" class="img-responsive" width = '500px' alt="1" />-->
<div class="clearfix"></div>
</div>
<div class="col-md-4"></div><!--Пустой блок с лева-->
</div>
<div class="row">
    <div class="col-md-8 offset-md-2">
      <h3>Смотри! Я по центру</h3>
    </div>
  </div>
</html>
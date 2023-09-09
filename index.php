<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>PHP Главная </title>
  <link rel="stylesheet" href = "/CSS/style.css">
</head>
<body>
<?php include "menu.inc.php"?>
<div>
  <h2>Разъяснения о программе</h2>
  <p>
    Реализация аутентификации происходит при нажатии меню "Вход": вводятся логин и пароль.<br/>
    Затем пароль преобразуется в токен и сравнивается с токеном, хранящимся в базе данных. <br/>
    Таким образом хранить пароль в базе данных нет необходиости и он хранится только для настройки<br/>
    Если же пользователь не имеет логина или пароля, то он должен пройти регистрацию,<br/>
    пункт меню "Регистрация". После прохождения регистрации можно в меню "Роли" назначить роли зарегистрированным<br/>
    пользователям: пользователь с ролью "admin" получает преимущества: в меню "Пример" полный просмотр<br/>
    доступен только пользователям с ролью "admin". К сожалению авторизацию  через VK не удалось <br/>
    довести до конца: реализация остановилась на получении токена и записи его в сессию ($_SESSION['token'])<br/>
    
</div>
</body>
</html>
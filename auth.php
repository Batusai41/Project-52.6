<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href = "/CSS/style.css">
</head>
<body>
<?php include "menu.inc.php" ?>
<div class="container">
  <h2>Форма регистрации</h2>
  <form class="form-horizontal"metod = "post" action="/register.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="login">Имя:</label>
      <div class="col-sm-10">
        <input type="login" class="form-control" id="login" placeholder="Введите имя" name="login">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Пароль:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Введите пароль" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Запомнить меня</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Отправить</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
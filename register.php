<?php
session_start();
//header("Content-type: text/html; charset=utf-8");
//$token = hash('gost-crypto', random_int(0,999999));
//$_SESSION["CSRF"] = $token;
$login =$_REQUEST['login'];
$pwd = $_REQUEST['pwd'] ;
$token = password_hash($pwd, PASSWORD_DEFAULT);
echo ($token);
echo "<br />";
//echo session_id();
//var_dump($_SESSION["CSRF"]);
$link = mysqli_connect('localhost', 'root', 
'root', 'db_auth');
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
//mysqli_set_charset($con, "utf8");
//$result = mysqli_query($link, "SELECT * FROM users WHERE LOGIN='". $_REQUEST["login "]. "' 
//AND PASSWORD='". $_REQUEST["pwd"]. "'");
$result = mysqli_query($link,'SELECT * FROM users WHERE LOGIN="'.$login.'" AND PASSWORD="'.$pwd.'"'); 
$num_rows = mysqli_num_rows($result);
if($num_rows >0)
{
   echo ('Вы вошли успешно');
}
else
{
	mysqli_query($link,"INSERT INTO users SET LOGIN='".$login."',TOKEN = '".$token."', PASSWORD='".$pwd."'");
}
?>
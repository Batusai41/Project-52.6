<?php
session_start();
//header("Content-type: text/html; charset=utf-8");
//$token = hash('gost-crypto', random_int(0,999999));
//$_SESSION["CSRF"] = $token;
//echo ($token);
//echo "<br />";
//echo $_SESSION["CSRF"];
$login =$_REQUEST['login'];
$pwd = $_REQUEST['pwd'] ;
$token = password_hash($pwd, PASSWORD_DEFAULT);
//echo ($token);
echo "<br />";
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
//while ($row = mysqli_fetch_array($result)) {
//    print($row['TOKEN']);
//   $tkn = $row['TOKEN'];
//}
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
    print($myrow['TOKEN']);
    $tkn = $myrow['TOKEN'];
    $role = $myrow['ROLE'];
   // print( $myrow['ROLE']);
$num_rows = mysqli_num_rows($result);
if (password_verify($pwd,$tkn)){
    print("Хорошо");
}
else{
    print ("Не хорошо");
}
if($num_rows >0)
{
    $_SESSION["isauth"] =true;
    $_SESSION["role"] = $role;
   echo ('Вы вошли успешно');
   echo "<br />";
   var_dump($_SESSION["role"]);
}
else
{
	echo("Вы не зарегистрированы");
    echo '<div id ="errors" style ="color:red">'.'<h2>' . 'Пройдите регистпацию'.'</h2>'.'</div>';
}
?>
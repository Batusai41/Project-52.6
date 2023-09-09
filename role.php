<!DOCTYPE html>
<html>
<head>
<title>ROLE</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список пользователей</h2>
<?php
$gtr = $_POST["Role"];
$red=$_GET['red_id'];
if(isset($_POST["Role"])){
  $conn = mysqli_connect("localhost", "root", "root", "db_auth");
 // $upsql ="UPDATE `users` SET `ROLE` = " . $gtr . " WHERE `USER_ID` = " . $red. " ;
  $sql = mysqli_query($conn, "UPDATE users SET ROLE = '$gtr' WHERE `USER_ID` = $red");
  mysqli_close($conn);
}
$conn = mysqli_connect("localhost", "root", "root", "db_auth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}


$sql = "SELECT * FROM Users";
if($result = mysqli_query($conn, 'SELECT * FROM users')){
     
    $rowsCount = mysqli_num_rows($result); // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    
   echo "<table border='1'>";
    echo "<table><tr><th>Id</th><th>Логин</th><th>Роли</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["USER_ID"] . "</td>";
            echo "<td>" . $row["LOGIN"] . "</td>";
            echo "<td>" . $row["ROLE"] . "</td>";
           echo  "<td><a href='?red_id={$row['USER_ID']}'>Редактироать</a></td>" ;
        echo "</tr>";
    }
    echo "</table>";
     $red = $_GET['red_id'];
   //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
   if (isset($_GET['red_id'])) {
    //$sql = mysqli_query($conn, "SELECT * FROM users"); // WHERE USER_ID=" .'$red' ." ;
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE USER_ID= $red");
    $product = mysqli_fetch_array($sql);
  }
?>
<br><br>
<form action=""  method ="post">
  <table>
    <tr>
      <td>Логин:</td>
      <td><input type="text" name="Login" value="<?= isset($_GET['red_id']) ? $product['LOGIN'] : ''; ?>"></td>
    </tr>
    <tr>
      <td>Роль:</td>
      <td><input type="text" name="Role"  value="<?= isset($_GET['red_id']) ? $product['ROLE'] : ''; ?>"> </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="OK"></td>
    </tr>
  </table>
</form> 
<?php    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
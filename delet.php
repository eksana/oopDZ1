<?php
$db = mysqli_connect('localhost', 'root', "");
	//mysqli_set_charset($db, 'utf8');
//mysqli_query($db,"SET NAMES utf8");
mysqli_select_db($db,"oopdz1")//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");

//$delete_sql = "DELETE FROM users WHERE id=$id";
//$delete_sql = "DELETE FROM reviews WHERE id=26";
 $delete_sql = "DELETE FROM reviews WHERE date < date_ak";
mysqli_query($db,$delete_sql) or 
die("<p>При удалении произошла ошибка</p>". mysql_error());
//header ('Location: index.html');

$count=mysqli_affected_rows($db);
      
       echo "Удалено из таблицы $count записей. Обновите страницу.";
//echo "<p>Запись была успешно удалена!Обновите страницу.</p>";
?>
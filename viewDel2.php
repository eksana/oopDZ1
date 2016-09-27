<?php include_once 'contrDel2.php';?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
 
<?php 
$GetDataFromDatabase = new GetDataFromDatabase;
//echo"<h2>объявления удалены</h2>";


$GetDataFromDatabase->del_data_from_db();



//echo "Удалено из таблицы $count записей. Обновите страницу";
echo ("ok.Удалено $GetDataFromDatabase->affected_rows обновите страницу");


?>
 
</table>
</body>
</html>
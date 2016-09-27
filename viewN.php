<?php include_once 'controllerN.php';?>
 
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
$i = 0;
while ($i < $GetDataFromDatabase->numRows) {
	echo"<tr><td>Заголовок</td><td>Текст<td>Дата</td><td>Источник</td></td><tr>";
    echo "<tr><td>".$GetDataFromDatabase->title[$i]."--"."</td><td>".$GetDataFromDatabase->text[$i]."--"."</td><td>".$GetDataFromDatabase->date[$i]."--"."</td><td>".$GetDataFromDatabase->from_where[$i]."</td></tr>";
    $i++;    
}
?>
 
</table>
</body>
</html>
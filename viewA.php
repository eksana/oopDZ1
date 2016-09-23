<?php include_once 'controllerA.php';?>
 
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
while ($i <= $GetDataFromDatabase->numRows) {
	//"<table><thead>Заголовок";
    echo "<tr><td>".$GetDataFromDatabase->title[$i]."--"."</td><td>".$GetDataFromDatabase->text[$i]."--"."</td><td>".$GetDataFromDatabase->author[$i]."--"."</td><td>".$GetDataFromDatabase->mark[$i]."</td></tr>";
    $i++;    
}
?>
 
</table>
</body>
</html>
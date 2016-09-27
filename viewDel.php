<?php include_once 'controllerDel.php';?>
 
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

$result=$GetDataFromDatabase->query("DELETE * FROM reviews WHERE id =15");


if($result==true){
    echo "ok";
	   }
	    else{
	    	echo "no";
	    }
	     




?>


 
</table>
</body>
</html>
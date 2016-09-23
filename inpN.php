<?php
//include('index.html');


$db = mysqli_connect('localhost', 'root', '', 'oopDZ1');
	mysqli_set_charset($db, 'utf8');
mysqli_query($db,"SET NAMES utf8");

class Article{
	public $text;
	
	public $title;
	public $date;
	public $from_where;
	//public $date;
	//public $from_where;
	

	function __construct(){
$err = "ошибка";
$text = strip_tags(strtolower($_GET['my__textN']));
$this->text = $text;

$from_where = strip_tags(strtolower($_GET['my__fromN']));
$this->from_where = $from_where;

$title = strip_tags(strtolower($_GET['my__titleN']));
$this->title = $title;

$date = strip_tags(strtolower($_GET['my__dateN']));
$this->date = $date;


}
 

	/*function selecta(){
		echo"<h1>$this->text</h1>";
	}*/
	/*function select_table(){
		//echo"<h1>$this->table</h1>";
		print_r($this->table);
	}*/
	/*function select_db(){
		echo"<h1>$this->db</h1>";
	}*/
	

}

$article1 = new Article();

//print_r($article1);
//$article1->text="my";
//echo $article1->title;

//echo $article1->author;
//echo $article1->mark;


  /* $result = "INSERT INTO '$article1->table' (title,from_where) VALUES('$article1->title', '$article1->from_where')";
   if ($result==true) {
   	echo "Информация добавлена";
}
     
    else {
    	echo "Информация не добавлена";
}
$query = mysqli_query($db, $result);*/

  //обавляем данные в базу

   $result = "INSERT INTO news (title,text,date,from_where) VALUES('$article1->title','$article1->text','$article1->date', '$article1->from_where')";
   

if ($result==true) {
   	echo "Информация добавлена";
   	header ('Location: index.html');
}
     
    else {
    	echo "Информация не добавлена";
    }
$query = mysqli_query($db, $result); 



?>
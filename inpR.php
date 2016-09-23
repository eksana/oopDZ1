<?php
//include('index.html');

try{

$db = mysqli_connect('localhost', 'root', '', 'oopDZ1');
	mysqli_set_charset($db, 'utf8');
mysqli_query($db,"SET NAMES utf8");
if(!$db) throw new Exception("Нет подключения!");
}

catch(exception $e){
	echo "Произошла ошибка - ",
	$e->getMessage(),
	" в строке ",
	$e->getLine(),
	" файла ",
	$e->getFile();
}

class Article{
	public $text;
	
	public $title;
	public $date;
	public $date_ak;
	public $e;
	//public $from_where;
	

	function __construct(){
$err = "ошибка";

$text = strip_tags(strtolower($_GET['my__textR']));
$this->text = $text;

$date_ak = strip_tags(strtolower($_GET['my__dateAktR']));
$this->date_ak = $date_ak;

$title = strip_tags(strtolower($_GET['my__titleR']));
$this->title = $title;

$date = strip_tags(strtolower($_GET['my__dateR']));
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


  
  //обавляем данные в базу

   $result = "INSERT INTO reviews (title,text,date,date_ak) VALUES('$article1->title','$article1->text','$article1->date','$article1->date_ak')";
   if ($result==true) {
   	echo "Информация добавлена";
   //	header ('Location: index.html');
}
     
    else {
    	echo "Информация не добавлена";
}
$query = mysqli_query($db, $result); 




?>
<?php 
include_once 'model.php';
 
class GetDataFromDatabase extends database
{   
     
      public $date;
       public $date_ak;
       public $result;
        public $id;
        public  $query;

       
    function __construct(){
        parent::connect();
         //self::get_data_from_db();
       self::remove_data_from_db();

     
    }
     /*public function query($query) {
        return $this->mysqli->query($query);
    }*/
    


   
 
// echo $delete->data;
    function remove_data_from_db() {
        //$query  = ("DELETE  FROM reviews WHERE date > (NOW())");
       //$query = ("DELETE FROM reviews WHERE date > date_ak");
      
       $query  = "DELETE * FROM reviews WHERE id = 15";
       
       $result=mysqli_query($this->connect,$query);
       //return $result;
       return $this->query($query);
      /* mysql_query($query) or 
die("<p>При удалении произошла ошибка</p>". mysql_error());
echo "<p>Запись была успешно удалена!</p>";*/

        
   /*if ($result==true) {
   echo "Информация добавлена";
   
}
     
    else {
        echo "Информация не добавлена";
    }*/
     //$result = mysql_query($db,$query);
   /*$result=mysql_query($query,$this->connect);
       return $result;*/
       /*$result=mysql_query($query,$this->connect)or 
die("<p>При удалении произошла ошибка</p>". mysql_error());*/

      
        
    }
 
}

//DELETE FROM `your_table`
//WHERE `user` = n AND `date` < 'your_date';
?>

<?php 
include_once 'model.php';
 
class GetDataFromDatabase extends database
{   
     
      public $date;
       public $date_ak;

       /*function get_date(){
        return $this->date;
       }

       function get_dateak(){
        return $this->date_ak;
       }*/
 
    function __construct(){
        parent::connect();
        //self::get_data_from_db();
        self::remove_data_from_db();
        parent::close();
        $date_ak = strip_tags(strtolower($_GET['my__dateAktR']));
        $this->date_ak = $date_ak;
        $date = strip_tags(strtolower($_GET['my__dateR']));
        $this->date = $date;
    }

    
 
    function remove_data_from_db() {
        //$query  = ("DELETE * FROM reviews WHERE date > (NOW())");
       $query  = ("DELETE * FROM reviews WHERE date < date_ak");
      
        //$query  = "DELETE * FROM reviews WHERE id > 9";
        //$result = mysqli_query($db, $query); 
        
     /*if ($result==true) {
   echo "Информация добавлена";
   
}
     
    else {
        echo "Информация не добавлена";
    }*/
       $result = mysql_query($db,$query);
        
        
        
    }
 
}

//DELETE FROM `your_table`
//WHERE `user` = n AND `date` < 'your_date';
?>

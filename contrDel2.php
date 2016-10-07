<?php 
include_once 'model.php';
 
class GetDataFromDatabase extends database
{   
     public $title  = array();
     public $text = array();
    public $numRows;
     public $date=array();
       public $date_ak=array();
       public $res;
 
    function __construct(){
        parent::connect();
        self::del_data_from_db();
        parent::close();
        
    }
  
   
    
 
    function del_data_from_db() {
       
         //$query  = "DELETE * FROM reviews WHERE id = 15";
        $query = "DELETE FROM reviews WHERE date < date_ak";
       // $query = "DELETE FROM reviews WHERE date < (NOW())";
        

       $result =  mysql_query($query);
       //$res=mysql_affected_rows();
        //return $this->res;
        
       

      //$count=mysqli_affected_rows($this->connect,$result);
     // return $this->count;
       $count=mysqli_affected_rows();
       return $count;
     
      //echo "Удалено из таблицы $GetDataFromDatabase->affected_rows записей";

       
    }
    
  
}
?>
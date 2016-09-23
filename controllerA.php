<?php 
include_once 'model.php';
 
class GetDataFromDatabase extends database
{   
     public $title  = array();
     public $text = array();
    public $numRows;
 
    function __construct(){
        parent::connect();
        self::get_data_from_db();
        parent::close();
    }
 
    function get_data_from_db() {
        $query  = ("SELECT * FROM articles ORDER BY `id` DESC limit 10");
        $result = mysql_query($query);
      
        
        $i = 0;
        while ($myrow = mysql_fetch_array ($result)) {
            $this->title[$i]=$myrow['title'];
            $this->text[$i]=$myrow['text'];
            $this->author[$i]=$myrow['author'];
            $this->mark[$i]=$myrow['mark'];
            $i++;
        }
          
        $this->numRows = $i;
  }
}
 

?>

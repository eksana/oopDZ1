<?php 
class database{
        
    public $connect;
    public $selectDatabase;
 
    public function connect() {
        $server   = "localhost";
        $user     = "root";
        $password = "";
        $db       = "oopDZ1";
 
        $this->connect = mysql_connect($server, $user, $password);
        $this->selectDatabase = mysql_select_db($db); 
        //$this->query = mysql_query($db,"SET NAMES utf8");
    }
 
    function close(){
        mysql_close($this->connect);  
    }
 
}
?>
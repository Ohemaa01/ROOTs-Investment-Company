<?php
require("db_credentials.php");

class Database{
    // properties
    public $db= null;
    public $results= null;

    // method
    public function connection(){
        $this->db= mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

        // testing connection
        if(mysqli_connect_errno()){
            return false;
        }else {
            return true;
        }

    }
    // run query
    public function run($query){
        if(!$this->connection()){
            return false;
        }elseif($this->db == null){
            return false;
        }
        $this->results= mysqli_query($this->db, $query);
        if($this->results == false){
            return false;
        } else{
            return true;
        }


    }
    public function fetch($query){
        // check if results is set
        if($this->run($query)){
            return mysqli_fetch_assoc($this->results);   
        } 
        return false;
    }

    public function fetchAll($query){
        if($this->run($query)){
            return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
        }
        return false;
    }
}
?>
<?php

class DB_Connect{  

    var $link;
    var $host = "localhost";
    var $username = "root";
    var $password = "";

    public function __construct() {

       
        $this->link = new PDO('mysql:host=localhost;dbname=snd-videosys', $this->username, $this->password);
        $this->link->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

    }

    public function __destruct() {

        $this->disconnect();
    }
    
      public function disconnect() {

        $this->link = null;
    }
}

?>
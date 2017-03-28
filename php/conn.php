<?php
class db {

    private $conn;
    public function __construct($dbname, $user, $pass) {
      try {
      $this->conn = new PDO("mysql:host=localhost;".$dbname."", $user, $pass);
      }
      catch(PDOException $e){
        print($e->getMessage());
      }

    }
}

?>


<?php
class db_connect {
    private $conn;
 
    public function connect() {
        require_once 'db.php';
    
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
         
        // return database handler
        return $this->conn;
    }
}
 
?>
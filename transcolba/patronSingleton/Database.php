<?php 
class Database {
    static private $instance = null;
     
    private function __contruct() {
        try {
            $cn = new PDO("mysql:host=localhost;dbname=transcolba", "root", "");
            //return($cn);
            return printf("muy bien");
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
     
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }  
}


$db = Database::getInstance();
echo $db;

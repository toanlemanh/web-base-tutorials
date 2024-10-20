<?php 

require('./config/database.php');

class DatabaseConnection {
    private static $connection = null;
    private function __construct() {}
    public static function getInstance () {
        if (self::$connection === null){
            self::$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            // if any error. logging error in php-log.error
        }
        return self::$connection;
    }
    public static function closeConnection () {
        if (self::$connection !== null ){
            self::$connection->close();
        }
    }
}
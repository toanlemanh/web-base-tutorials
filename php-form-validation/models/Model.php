<?php
require('./helpers/DatabaseConnection.php');
class Model{
    protected $dbConnection;
    public function __construct(){
        $this->dbConnection = DatabaseConnection::getInstance();
    }
    public function close() {
        if ($this->dbConnection !== null ) {
            DatabaseConnection::closeConnection();
        }
    }
}
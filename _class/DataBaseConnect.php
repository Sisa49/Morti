<?php
    class DataBaseConnect{
        protected $_connection = null;
        private $_host = "localhost";
        private $_username = "root";
        private $_password = "";
        private $_database = "morti";
        private $_sqll = "mysql";
        public function __construct() {
            try{
                $this ->_connection = new PDO("$this->_sqll:host=$this->_host;dbname=$this->_database",$this->_username,$this->_password);
                $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $ex){
                echo "Error: ". $ex->getMessage()."</br>";
                exit;
            }
            
        }
    }
?>
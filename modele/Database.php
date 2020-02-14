<?php

    class Database
    {
        private $host = 'localhost';
        private $pass = '';
        private $usr = 'root';
        private $dbname = 'userlist';
        protected $conn;
 
 
        public function __construct(){

            $dns = 'mysql:host='.$this->host.';dbname='.$this->dbname;

            $options = array(
 
             PDO::ATTR_PERSISTENT  => true,
             PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION
            );
            
 
            try {
                $this->conn = new PDO($dns , $this->usr,$this->pass, $options);

                
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                
            }
        }

        public function getConnection(){

            return $this->conn;

        }

      
    }

    // 
    // var_dump($new);

    
?>
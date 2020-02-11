<?php

    class Database
    {
        private $host = 'localhost';
        private $pass = '';
        private $usr = 'root';
        private $dbname = 'userlist';
 
        public function __construct(){

            $dns = 'mysql:host='.$this->host.';dbname='.$this->dbname;

            $options = array(
 
             PDO::ATTR_PERSISTENT  => true,
             PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION
            );
            
 
            try {
                $this->dbh = new PDO($dns , $this->usr,$this->pass, $options);
                
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                
            }
        }

        public function insert($nom, $prenom, $mail,$pass) {

            $user = array(':Nom' => $nom,
                          ':Prenom' => $prenom,
                          ':Mail' => $mail,
                          ':Pass' => $pass);
         
                          $sql = "INSERT INTO user (nom, prenom, mail, pass) VALUES ('$nom', '$prenom','$mail','$pass')";
         
            $query = $this->pdo->prepare($sql);
         
            return $query->execute($user);
        }
      
    }

    $new = new Database;

    $new->insert();
?>
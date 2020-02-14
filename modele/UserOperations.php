<?php

require_once('Database.php');

class UserOperations extends Database{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($nom, $prenom, $mail, $pass) {

        //$db = new Database;

        //$conn = $db->getConnection();

        $user = array(':Nom' => $nom,
                      ':Prenom' => $prenom,
                      ':Mail' => $mail,
                      ':Pass' => $pass);
     
        $sql = "INSERT INTO user (nom, prenom, mail, pass) VALUES ('$nom', '$prenom','$mail','$pass')";
        $query = $this->conn->prepare($sql);
        return $query->execute($user);
     
    }

    
    public function selectlist()
    {
      
        $sql = "SELECT * FROM user";
        $q = $this->conn->query($sql) or die("failed!");
        while($r = $q->fetch(PDO::FETCH_ASSOC)){
            $data[]=$r;
        }
        return $data;

        
    }
    
     public function selectAllUsers(){
         return $this->selectlist("user")->fetchAll();
    }


}

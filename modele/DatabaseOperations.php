<?php

require_once('Database.php');

class DatabaseOperations {

    public function __construct()
    {
        
    }

    public function insert($nom, $prenom, $mail,$pass) {

        $db = new Database;

        $conn = $db->getConnection();

        $user = array(':Nom' => $nom,
                      ':Prenom' => $prenom,
                      ':Mail' => $mail,
                      ':Pass' => $pass);
     
                      $sql = "INSERT INTO user (nom, prenom, mail, pass) VALUES ('$nom', '$prenom','$mail','$pass')";
     
        $query = $conn->prepare($sql);
     
        return $query->execute($user);
    }
}

?>
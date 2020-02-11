<?php

require_once('log.php');

$DBB = new Database;

$nom =$_POST['Nom'];
$prenom =$_POST['Prenom'];
$pass =$_POST['Pass'];
$mail =$_POST['Mail'];

var_dump($_POST);


try {
    $conn = new PDO("mysql:host=$servername;dbname=userlist", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (nom, prenom, mail, pass) VALUES ('$nom', '$prenom','$mail','$pass')";

    $conn->exec($sql);

    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
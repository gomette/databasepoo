<?php

require_once('DatabaseOperations.php');


$nom =$_POST['Nom'];
$prenom =$_POST['Prenom'];
$pass =$_POST['Pass'];
$mail =$_POST['Mail'];

$new = new DatabaseOperations;
$new->insert($nom,$prenom,$mail,$pass);


?>
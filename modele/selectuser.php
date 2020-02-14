<?php

require_once('log.php');


$nom =$_POST['Nom'];
$prenom =$_POST['Prenom'];
$pass =$_POST['Pass'];
$mail =$_POST['Mail'];

$new = new DatabaseOperations;
$new->select($nom,$prenom,$mail,$pass);

?>
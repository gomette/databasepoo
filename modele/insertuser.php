<?php

require_once('UserOperations.php');


$nom =$_POST['Nom'];
$prenom =$_POST['Prenom'];
$pass =$_POST['Pass'];
$mail =$_POST['Mail'];

$new = new UserOperations;
$new->insert($nom,$prenom,$mail,$pass);

header("Location: ../vue/inscription.php");


?>
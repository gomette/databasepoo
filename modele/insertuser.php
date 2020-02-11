<?php

require_once('log.php');


    $nom =$_POST['Nom'];
$prenom =$_POST['Prenom'];
$pass =$_POST['Pass'];
$mail =$_POST['Mail'];

$new->insert($nom,$prenom,$mail,$pass);




?>
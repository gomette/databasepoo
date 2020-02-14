<?php

require_once('UserOperations.php');




$new = new UserOperations;
$data = $new->selectlist();

var_dump($data);

?>
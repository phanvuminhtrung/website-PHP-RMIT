<?php
require_once ('config.php');
require_once ('db_class.php');
$connection = new dbController(HOST,USER,PASS,DB);
$connection->logOut(); 

header('Location: home.php');


?>
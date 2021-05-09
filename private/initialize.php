<?php 

require_once('db_credentials.php');
require_once('db_functions.php');
require_once('classes/database.class.php');
//$random_id = rand(time() , 100000000);



$database = new Database();
$connection = db_connect();

?>
<?php 

require_once('db_credentials.php');
require_once('db_functions.php');
require_once('classes/database.class.php');
//$random_id = rand(time() , 100000000);


$connection = db_connect();

//$database = new Database($connection);
Database::set_data($connection);

?>
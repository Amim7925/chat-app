<?php 

require_once('db_credentials.php');
require_once('db_functions.php');
require_once('classes/database.class.php');
require_once('classes/user.class.php');
require_once('classes/chat.class.php');
require_once('classes/session.class.php');
//$random_id = rand(time() , 100000000);


$connection = db_connect();

//$database = new Database($connection);
Database::set_data($connection);

$session = new Session;

?>
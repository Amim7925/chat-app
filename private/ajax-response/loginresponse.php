<?php 

require_once('../initialize.php');

/*
function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }
if(!is_ajax_request()){exit;}

*/
  
  if(!isset($_GET['username'])) {exit;}

  $username = $_GET['username'];

  $password = $session->password;

  echo $username . "$$$$$" . $password;
  

  
?>
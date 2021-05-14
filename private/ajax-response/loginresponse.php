<?php 

require_once('../initialize.php');


function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }
if(!is_ajax_request()){
  echo "not an ajax request!";
  return false;
}

  
  if(!isset($_GET['username'])) {
    echo "username not found!";
    return false;
  }
  if(!isset($_GET['password'])) {
    echo "password not found!";
    return false;
  }

  $username = $_POST['username'];

  $password = $_POST['password'];


  
  $user = User::find_by_username($username);
  if($user){
    if(check_password($user['password'],$password)){
      $result = $session->login($user);
      return true;
    }
    else {
      echo "process falied!";
      return false;
    }
    
  }






  
?>
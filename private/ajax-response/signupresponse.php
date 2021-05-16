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

  
  if(!isset($_POST['username'])) {
    echo "username not set!";
    return false;
  }
  if(!isset($_POST['password'])) {
    echo "password not set!";
    return false;
  }
  if(!isset($_POST['email'])) {
    echo "email not set!";
    return false;
  }
  if(!isset($_POST['image'])) {
    echo "image not set!";
    return false;
  }
  if(!isset($_POST['fname'])) {
    echo "fname not set!";
    return false;
  }
  if(!isset($_POST['lname'])) {
    echo "lname not set!";
    return false;
  }
 

   $user = new User();

   $user->nameAndFamily = $_POST['fname'] . $_POST['lname'];
   $user->userName = $_POST['username'];
   $user->password = $_POST['password'];
   $user->email = $_POST['email'];
   $user->image = $_POST['image'];
   if($user->create()){
     echo true;
   }
   else {
     echo false;
   }

 







  
?>
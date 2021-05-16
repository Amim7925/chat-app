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

 $result = User::findall();

if($user) return $user;
else {
  echo "Somthing went wrong!";
}




    






  
?>
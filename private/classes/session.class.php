<?php 

class Session{

   public $username;
   public $password;
   public $login_time;


    public function __construct($args=[]){
        session_start();
        $this->password = $_SESSION['password'] =1;
    }






}

?>
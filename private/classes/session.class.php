<?php 

class Session{

   public $username;
   public $password;
   public $user_id;
   public $login_time;


    public function __construct($args=[]){
        session_start();
        $this->check_stored_data();
    }

    public function login($user){
        if(!$user)return false;
        $this->username = $_SESSION['userName'] = $user['userName'];
        $this->password = $_SESSION['password'] = $user['password'];
        $this->user_id = $_SESSION['unique_id'] = $user['unique_id'];
        $this->login_time = $_SESSION['login_time'] = date("h:i:sa");

        return true;
    }

    private function check_stored_data(){
        if(isset($_SESSION['userName'])){
            $this->username = $_SESSION['userName'];
            $this->password = $_SESSION['password'];
            $this->user_id = $_SESSION['unique_id'];
        }


    }



}

?>
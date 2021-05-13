<?php

class  User extends Database{

public $nameAndFamily;
public $userName;
public $password;
public $email;
public $unique_id;
public $image;
protected $hashed_pass;


static protected $all_items=['nameAndFamily','userName' , 'password' , 'email' , 'image', 'unique_id'   ];

static protected $classname = 'user';

public function __construct($args=[]) {
    $this->nameAndFamily = $args['nameAndFamily'] ?? '';
    $this->userName = $args['userName'] ?? '';
    $this->password =  $args['password'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->image = $args['image'] ?? '';
    $this->unique_id = $args['unique_id'] ?? '';

  }

  

public function check_password($saved_password , $password){
  if($saved_password == password_hash($password , PASSWORD_BCRYPT)) return true;
  else {
     return false;
  }
}

public function find_by_username($username){

  $sql = "SELECT * FROM user WHERE userName = '" .$username ."';" ;

  return static::$database->query($sql);
}

public function create_unique_id(){

  $random_id = rand(time() , 100000000);
  return $random_id;
}

public function hash_password($password){

  return password_hash( $password, PASSWORD_BCRYPT);

}




public function create($arg=[]){
  $unique_id = $this->create_unique_id();
  $password = $this->hash_password($this->password);
  $data= [$this->nameAndFamily ,$this->userName ,$password ,$this->email , $this->image , $unique_id ];
  $this->insert_data($data);
 
}










}







?>
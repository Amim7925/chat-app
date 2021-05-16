<?php 

class Database{

    static protected $classname;
    static protected $database;
    static protected $all_items;
    

    static public function set_data($theconnection){
        self::$database = $theconnection;
    }


    protected function insert_data($values){

        $sql = "INSERT INTO " . static::$classname . " ( "; 
        $sql .= join(static::$all_items,' , ') . " ) VALUES ('" . join($values ,"' ,'" );
        $sql .= "' );";
        $result = static::$database->query($sql);
        if(isset($result)) return true; 
    }

    static public function findall(){
        $sql = 'SELECT * FROM '. static::$classname;

        return static::$database->query($sql);
            
    }


    static public function find_by_id($id){
        $sql = "SELECT * FROM ".   static::$classname ." WHERE id = '" .self::$database->escape_string($id) ."';" ;
        //$sql .= "LIMIT '1'";
        $object_array= static::$database->query($sql);
        $record = $object_array->fetch_assoc();
        return $record;
        
    }
    
    
    public function update($unique_id){
        $sql = "UPDATE " .  static::$classname . " SET "; 
        $sql .= $this->set_data_in_array();
        $sql .= " WHERE unique_id = " . $unique_id .";";
        $result = self::$database->query($sql);
        if($result) return true;
        else return false;
    }
    
    protected function set_data_in_array(){
        $object_array=[];
        foreach (static::$all_items as  $value) {
            if($value == 'password') $this->$value = $this->hash_password($this->$value);
            $object_array[$value] = $this->$value;
        }
        $string = '';
        $r=[];
        foreach ($object_array as $key => $value) {
            $r[] =  $key . " = ' " . $value . " ' ";
        }
        $string .= join($r , ', ');
        return $string;
    
    }

    
    static public function delete($id){
        $sql = " DELETE FROM ".  static::$classname ." WHERE id = " .self::$database->escape_string($id) .";" ;
        //$sql .= "LIMIT = 1 ;";
        $result = static::$database->query($sql);
        //if(isset($result)) return $sql;
    }

    

    static protected function instantiate($item){
        $object = new static;
        
        foreach (self::$database->escape_string($item) as $key => $value) {
            if(property_exists($object,$key)) $object->key = $value;
        }   
        return $object;


    }

    protected function hash_password($password){

        return password_hash( $password, PASSWORD_BCRYPT);
      
    }

    static protected function put_in_array($object_item){
        $array=[];
        $object = self::$database->escape_string($object_item);
        while($record = $object->fetch_assoc()){
            $array[] = static::instantiate($record);
        }
        return $array;
    }

    



}



?>
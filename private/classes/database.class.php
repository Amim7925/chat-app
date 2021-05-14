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
        $sql .= join(static::$all_items,' , ') . " ) VALUES ('" . join(escape_string($values) ,"' ,'" );
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
    
    //not yet complete
    static public function update($id){
        $sql = "UPDATE " .  static::$classname . "SET "; 
        $sql .= join($all_items,',') . ") VALUES ('" . join($arg ,"' ,'" );
        $sql .= "' );";
        //$result = self::$database->query($sql);
        return 'not complete';
    }
    

    
    static public function delete($id){
        $sql = " DELETE FROM ".  static::$classname ." WHERE id = " .escape_string($id) .";" ;
        //$sql .= "LIMIT = 1 ;";
        $result = static::$database->query($sql);
        //if(isset($result)) return $sql;
    }

    

    static protected function instantiate($item){
        $object = new static;
        
        foreach ($item as $key => $value) {
            if(property_exists($object,$key)) $object->key = $value;
        }   
        return $object;


    }

    static protected function put_in_array($object){
        $array=[];
        while($record = $object->fetch_assoc()){
            $array[] = static::instantiate($record);
        }
        return $array;
    }

    



}



?>
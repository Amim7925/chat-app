<?php 

class Database{

    protected $classname = 'user';
    static protected $database;




    static public function set_data($theconnection){
        self::$database = $theconnection;
    }


    static public function insert_data($arg){

        $sql = "INSERT INTO" . $classname . "("; 
        $sql .= join($all_items,',') . ") VALUES ('" . join($arg ,"' ,'" );
        $sql .= "' );";
        $result = self::$database->query($sql);
    }
    
    static public function findall(){
        $sql = 'SELECT * FROM user';

        return self::$database->query($sql);
        
    }


    static public function find_by_id($id){
        $sql = "SELECT * FROM ". $classname ."WHERE id ='" .$id ."'" ;
        $sql .= "LIMIT '1'";
        return self::$database->query($sql);
    
    }

    //not yet complete
    static public function update($id){
        $sql = "UPDATE " . $classname . "SET "; 
        $sql .= join($all_items,',') . ") VALUES ('" . join($arg ,"' ,'" );
        $sql .= "' );";
        //$result = self::$database->query($sql);
        return 'not complete';
    }
    //UPDATE table_name
    //SET column1=value, column2=value2,...
    //WHERE some_column=some_value
    static public function delete($id){
        $sql = " DELETE FROM ". $classname ."WHERE id ='" .$id ."'" ;
        $sql .= "LIMIT '1'";
        return self::$database->query($sql);
    
    }

    




}



?>
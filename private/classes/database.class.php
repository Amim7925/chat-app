<?php 

class Database{

    protected $classname = 'user';
    protected $connection;




    public function insert_data($arg){

        $sql = "INSERT INTO" . $classname . "("; 
        $sql .= join($all_items,',') . ") VALUES ('" . join($arg ,"' ,'" );
        $sql .= "' );";
        $result = $connection->query($sql);
        
    }
    
    public function findall(){
        $sql = "SELECT * FROM user";

        return $connection->query($sql);
    
    }


    public function find_by_id($id){
        $sql = "SELECT * FROM ". $classname ."WHERE id ='" .$id ."'" ;
        $sql .= "LIMIT '1'";
        return $connection->query($sql);
    
    }

    //not yet complete
    public function update($id){
        $sql = "UPDATE " . $classname . "SET "; 
        $sql .= join($all_items,',') . ") VALUES ('" . join($arg ,"' ,'" );
        $sql .= "' );";
        //$result = $connection->query($sql);
        return 'not complete';
    }
    //UPDATE table_name
    //SET column1=value, column2=value2,...
    //WHERE some_column=some_value
    public function delete($id){
        $sql = " DELETE FROM ". $classname ."WHERE id ='" .$id ."'" ;
        $sql .= "LIMIT '1'";
        return $connection->query($sql);
    
    }

    




}



?>
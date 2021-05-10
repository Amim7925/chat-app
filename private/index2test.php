<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>this is amim7925</p>
    <p>this is aras7925</p>
    <p>this is mohandess</p>
   
    <?php
    
   require_once("../private/initialize.php");
    
    $result = Database::findall();
    foreach ($result as $args) {
        echo $args['userName'];
    }
    

    /*
    $sql = "SELECT * FROM user";
    $result = $connection->query($sql);
    if(isset($result))echo "somthing2";
  
    $all_items =[];
    $all_items=['nameAndFamily','username' , 'password' , 'email' , 'unique_id' , 'image' ];

    function list_property_names()
    {
        foreach ($all_items as $key => $value) {

            return $value;

        }
    }

*/

?>


</body>
</html>
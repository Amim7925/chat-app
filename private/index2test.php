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

    //..//$random_id = User::create_unique_id();

    $result = Chat::findall();
    




    
    //$all_items=['alireza2','alzr2',User::hash_password('123'),'alrz2@gmail.com' ,'', $random_id  ];
   // $result = chat::delete(2);
   

  // $result = User::create($all_items);


    /*

    $user = new User();

   $user->nameAndFamily ='MAMMAD2';
   $user->userName = "mdm2";
   $user->password = '123';
   $user->email ="md@gml.com2";
   $user->image ='';
   $user->create();




        if(isset($result))echo "XXXXXXXXXXX";
    //echo $result->nameAndFamily;
    echo "</br>";
    foreach ($result as $args) {
        echo $args['email'];
        echo "</br>";
    }
    $all_items=['ahmadi','ali' , 'Ali Ahmadi2' , 'WQWQWWQWWQWQW@ssa.com' , '' , '54122'  ];
    //$user = new User($all_items);


echo "</br>";
    $result2= User::find_by_id(3);
    if(isset($result2))echo "XXXXXXXXXXX";
    //echo $result2['email'];
    echo "</br>";
foreach ($result2 as $args) {
        echo $args['email'];
    }
 










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
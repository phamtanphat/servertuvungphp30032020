<?php
    require("connect.php");
    require("response.php");
    require('wordmodel.php');

    $en = $_POST['en'];
    $vn = $_POST['vn'];
    $ismemorized = $_POST['ismemorized'];

    $query = "INSERT INTO tuvung VALUES (null ,'$en','$vn','$ismemorized')";

    $data = mysqli_query($con , $query);
    $array = [];
  
    if($data){
        array_push($array, new WordModel( $con->insert_id ,$en,$vn,$ismemorized == '0' ? false : true) );
        echo json_encode(new Response(true , null ,$array ));
    }else{
        echo json_encode(new Response(false , "Thêm thất bại" ,[]));
    }
?>
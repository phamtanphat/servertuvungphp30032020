<?php
    require("connect.php");
    require("response.php");
    require('wordmodel.php');

    $id = $_POST['id'];
    $ismemorized = $_POST['ismemorized'];

    $query = "UPDATE tuvung SET ismemorized = '$ismemorized'  WHERE Id = '$id'";

    $data = mysqli_query($con , $query);
    $array = [];
  
    if($data){
        $queryRow = "SELECT * FROM tuvung WHERE id = '$id'";
        $dataupdate = mysqli_query($con , $queryRow);
        while($row = mysqli_fetch_assoc($dataupdate)){
            array_push($array , new WordModel($row['id'],$row['en'],$row['vn'],$row['ismemorized'] == '0' ? true : false));
        }
        echo json_encode(new Response(true , null ,$array ));
    }else{
        echo json_encode(new Response(false , "Thêm thất bại" ,[]));
    }
?>
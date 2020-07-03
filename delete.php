<?php
    require("connect.php");
    require("response.php");
    require('wordmodel.php');

    $id = $_POST['id'];
    
    $queryRow = "SELECT * FROM tuvung WHERE id = '8'";
    $dataupdate = mysqli_query($con , $queryRow);

    if ($dataupdate){
        echo "Co";
        // $query = "DELETE FROM tuvung WHERE id = '$id'";

        // $data = mysqli_query($con , $query);
        // $array = [];
      
        // if($data){
        //     while($row = mysqli_fetch_assoc($dataupdate)){
        //         array_push($array , new WordModel($row['id'],$row['en'],$row['vn'],$row['ismemorized'] == '0' ? true : false));
        //     }
        //     echo json_encode(new Response(true , null ,$array ));
        // }else{
        //     echo json_encode(new Response(false , "Xóa thất bại" ,[]));
        // }
    }else{
        echo "Khong";
        // echo json_encode(new Response(false , "Xóa thất bại" ,[]));
    }
   
?>
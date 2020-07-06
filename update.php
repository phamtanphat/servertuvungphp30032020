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
        $dataFilter = mysqli_query($con , $queryRow);

        $rowcount = mysqli_num_rows($dataFilter);

        if($rowcount > 0 ){
            while($row = mysqli_fetch_assoc($dataupdate)){
                array_push($array , new WordModel($row['id'],$row['en'],$row['vn'],$row['ismemorized'] == '0' ? false: true));
            }
            echo json_encode(new Response(true , null ,$array ));
        }else{
            echo json_encode(new Response(false , "Giá trị không tồn tại" ,[]));
        }
    }else{
        echo json_encode(new Response(false , "Thêm thất bại" ,[]));
    }
?>

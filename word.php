<?php
    require('connect.php');

    // Cau query
    $page = $_GET['page'];
    if (!$page){
        $page = 1;
    }
    $items_per_page = 2;
    $offset = ($page - 1) * $items_per_page;
    
    $query = "SELECT * FROM tuvung Orders LIMIT " . $offset . "," . $items_per_page;

    $data = mysqli_query($con , $query);

    $array = [];

    while($row = mysqli_fetch_assoc($data)){
        echo $row['id'];
    }
    // if ($data){
    //     echo
    // }

    // class Word {
    //     function __construct($id , $en , $vn , $isMemorized){
    //         $this->id = $id;
    //         $this->en = $en;
    //         $this->vn = $vn;
    //         $this->isMemorized = $isMemorized;
    //     }
    // }

?>
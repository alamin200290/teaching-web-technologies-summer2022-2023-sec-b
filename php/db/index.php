<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($conn){
    //     echo "success";
    // }else{
    //     echo "DB error";
    // }

    $sql = "insert into product values('', 'abc', '100')";
    $update = mysqli_query($conn, $sql);

    $sql2 = "select * from product";
    $result = mysqli_query($conn, $sql2);
    //$count = mysqli_num_rows($result);
    //echo $count;

    // print_r($user);
    // echo "<br>";
    // print_r($user1);

    // for($i=0; $i<$count; $i++){
    //     $user = mysqli_fetch_assoc($result);
    //     print_r($user);
    //     echo "<br>";
    // }

    while($user = mysqli_fetch_assoc($result))
    {
        print_r($user);
        echo "<br>";
    }

?>
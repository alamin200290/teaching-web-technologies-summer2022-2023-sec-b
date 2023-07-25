<?php 
    //sleep(3);
    $json = $_REQUEST['json'];
    $user = json_decode($json);
    //echo $user->username;

    $user = ['username'=>'alamin', 'password'=>'abc', 'email'=>'alamin@aiub.edu'];
    echo json_encode($user);
?>
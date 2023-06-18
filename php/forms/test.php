<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        //echo "null username/password";
        header('location: index.php?msg=error');
    }else if($username == $password){
        echo "Valid user!";
    }

?>
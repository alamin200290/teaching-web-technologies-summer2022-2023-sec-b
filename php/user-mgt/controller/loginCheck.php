<?php

    require_once('../model/userModel.php');

    session_start();

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $status = login($username, $password);

        if($username == "" || $password == ""){
            echo "null username/password";
        }else if($status){
            $_SESSION['flag'] = true;
            header('location: ../view/home.php');
        }else{
            echo "invalid username/password";
        }
    }
?>

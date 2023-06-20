<?php
    session_start();

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "null username/password";
        }else if($username == $password){
            $_SESSION['flag'] = true;
            header('location: home.php');
        }
    }
?>

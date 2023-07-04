<?php
    //include('db.php');
    require_once('../model/userModel.php');
    session_start();

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        //print_r($_FILES);
        $src = $_FILES['myfile']['tmp_name'];
        //echo $src;

        $des = "../upload/".$_FILES['myfile']['name'];
        //echo $des;
        if(move_uploaded_file($src, $des)){
            echo "Success";
        }else{
            echo "Error";
        }

        // $status = addUser($username, $password, $email);

        // if($status){
        //     header('location: ../view/login.php');
        // }else{
        //     echo "DB Error, please try again";
        // }
    }
?>

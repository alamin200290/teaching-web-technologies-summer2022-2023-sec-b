<?php 
    //print_r($_GET);

    // if($_GET['msg'] == "error"){
    //     echo "Null username or password!";
    // }

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "null username/password";
        }else if($username == $password){
            header('location: home.php');
        }
    }
?>

<html>
<head>
    <title>PHP Form Submission</title>
</head>
<body>
    <form method="post" enctype="">

        username:   <input type="text" name="username" value="" /> <br>
        Password:   <input type="password" name="password" value="" /> <br>
                    <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>
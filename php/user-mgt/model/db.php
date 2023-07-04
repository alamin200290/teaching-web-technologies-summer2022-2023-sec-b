<?php

    $host = '127.0.0.1';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'webtech';

function dbConnection(){
    global $host;
    global $dbname;
    global $dbuser;
    global $dbpass;

    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return $con;
}

?>
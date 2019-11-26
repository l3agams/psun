<?php
    $localhost = "127.0.0.1";
    $user = "root";
    $pass = "";
    $dbname = "healthy-lifestyle";
    
    $connect = new mysqli($localhost,$user,$pass,$dbname);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    mysqli_set_charset($connect,"utf8");
?>
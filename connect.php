<?php
    $localhost = "sql209.freehost.in.th";
    $user = "feton_24851758";
    $pass ="pnn4ever";
    $dbname = "feton_24851758_healthylifestyle";
    
    $connect = new mysqli($localhost,$user,$pass,$dbname);

    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    mysqli_set_charset($connect,"utf8");
?>
<?php
    $db_host = 'localhost';
    $db_name = 'forum';
    $db_user = 'root';
    $db_password = 'root';

    $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    mysqli_set_charset($connect, "utf-8");

    if (!$connect){
        print_r("Error");
    };

?>
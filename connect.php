<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'forum');

    if (!$connect){
        print_r("Error");
    };

?>
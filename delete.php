<?php
    require "data/db_data.php";
    $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    mysqli_set_charset($connect, "utf-8");

    $theme_id = $_GET["theme_id"];

    mysqli_query($connect, "DELETE FROM `forum_themes` WHERE `id` = '$theme_id'");

    header("Location: /");
?>
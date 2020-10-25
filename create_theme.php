<?php
    require "data/db_data.php";
    $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    mysqli_set_charset($connect, "utf-8");

    $theme_name = $_POST["theme_name"];
    mysqli_query($connect, "INSERT INTO `forum_themes` (`id`, `title`) VALUES (NULL, '$theme_name')");
    header("Location: /");
?>
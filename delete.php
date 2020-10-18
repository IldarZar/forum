<?php
    require "connect.php";

    $theme_id = $_GET["theme_id"];

    mysqli_query($connect, "DELETE FROM `forum_themes` WHERE `id` = '$theme_id'");

    header("Location: /");
?>
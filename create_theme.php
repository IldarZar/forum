<?php
    require "connect.php";
    $theme_name = $_POST["theme_name"];
    mysqli_query($connect, "INSERT INTO `forum_themes` (`id`, `title`) VALUES (NULL, '$theme_name')");
    header("Location: /");
?>
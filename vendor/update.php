<?php
    require "../connect.php";

    $theme_id = $_GET['theme_id'];
    $title = $_POST['theme_name'];

    mysqli_query($connect, "UPDATE `forum_themes` SET `title` = '$title' WHERE `id` = '$theme_id'");

    header("Location: /");
?>
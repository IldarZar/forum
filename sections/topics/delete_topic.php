<?php
    require "../../data/db_data.php";
    $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    mysqli_set_charset($connect, "utf-8");

    $theme_id = $_GET["theme_id"];
    $section_id = $_GET["section_id"];
    $topic_id = $_GET["topic_id"];
    
    mysqli_query($connect,  "DELETE FROM `forum_topics` WHERE `forum_topics`.`id` = '$topic_id'");

    header("Location: ../section.php?theme_id=" . $theme_id . "&section_id=" . $section_id);
?>
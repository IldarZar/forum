<?php
    require "../../data/db_data.php";

    $theme_id = $_GET["theme_id"];
    $section_id = $_GET["section_id"];
    $topic_id = $_GET["topic_id"];
    
    mysqli_query($connect,  "DELETE FROM `forum_topics` WHERE `forum_topics`.`id` = '$topic_id'");

    header("Location: ../section.php?theme_id=" . $theme_id . "&section_id=" . $section_id);
?>
<?php
    require "../../connect.php";

    $theme_id = $_GET["theme_id"];
    $section_id = $_GET["section_id"];
    $topic_name = $_POST["topic_name"];

    mysqli_query($connect, "INSERT INTO `forum_topics`(`id`, `title`, `section_id`, `topic_author`, `topic_status`, `last_user`, `last_time`) VALUES (NULL, '$topic_name', '$section_id', 0, 0, 0, 0)");

    header("Location: ../section.php?theme_id=" . $theme_id . "&section_id=" . $section_id);
?>
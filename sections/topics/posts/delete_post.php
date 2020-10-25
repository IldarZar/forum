<?php
    require "../../../data/db_data.php";

    $post_name = $_POST['post_name'];
    $theme_id = $_GET['theme_id'];
    $section_id = $_GET['section_id'];
    $topic_id = $_GET['topic_id'];
    $post_id = $_GET['post_id'];

    mysqli_query($connect, "DELETE FROM `forum_posts` WHERE `forum_posts`.`id` = '$post_id'");

    header('Location: ../topic.php?theme_id='.$theme_id.'&section_id='.$section_id.'&topic_id='.$topic_id);
?>
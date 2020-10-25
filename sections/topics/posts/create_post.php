<?php
    require "../../../data/db_data.php";

    $post_name = $_POST['post_name'];
    $theme_id = $_GET['theme_id'];
    $section_id = $_GET['section_id'];
    $topic_id = $_GET['topic_id'];

    mysqli_query($connect, "INSERT INTO `forum_posts` (`id`, `author_id`, `post_text`, `topic_id`, `time`) VALUES (NULL, 0, '$post_name', '$topic_id', 0)");

    header("Location: ../topic.php?theme_id=".$theme_id."&section_id=".$section_id."&topic_id=".$topic_id);
?>  
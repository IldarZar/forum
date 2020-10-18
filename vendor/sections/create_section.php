<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'forum');

    $theme_id = $_GET['theme_id'];
    $section_name = $_POST['section_name'];

    print_r($theme_id, $section_name);

    mysqli_query($connect,  "INSERT INTO `forum_sections` (`id`, `theme_id`, `title`, `views`, `answers`) VALUES (NULL, '$theme_id', '$section_name', 0, 0)");

    header("Location: ../theme.php?theme_id=" . $theme_id);


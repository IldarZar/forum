<?php
    require "../../connect.php";

    
    $section_id = $_GET["section_id"];
    $theme_id = $_GET["theme_id"];
    mysqli_query($connect, "DELETE FROM `forum_sections` WHERE `id` = '$section_id'");
    header("Location: ../theme.php?theme_id=" . $theme_id);
?>
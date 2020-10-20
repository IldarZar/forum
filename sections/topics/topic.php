<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php 
        require "../../connect.php";
        
        $theme_id = $_GET['theme_id'];
        $section_id = $_GET['section_id'];
        $topic_id = $_GET['topic_id'];

        $values = mysqli_query($connect, "SELECT * FROM `forum_posts`");

        while($value = mysqli_fetch_assoc($values)){

            if ($topic_id == $value['topic_id']){
                print_r($section_id);
                print_r($value);
    ?>
            <a href=""><?= $value['post_text'] ?></a>
            <a href="posts/delete_post.php?theme_id=<?= $theme_id ?>&section_id=<?= $section_id ?>&topic_id=<?= $topic_id ?>&post_id=<?= $value['id'] ?>">Удалить</a>
    <?php
            }
        };
    ?>

    </pre>

    <form action="posts/create_post.php?theme_id=<?= $theme_id ?>&section_id=<?= $section_id ?>&topic_id=<?= $topic_id ?>" method="POST">
        <p>Название поста</p>
        <input name="post_name" type="text">
    <button type="submit">Добавить</button>
</body>
</html>
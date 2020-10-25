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

        require "data/db_data.php";
        $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
        mysqli_set_charset($connect, "utf-8");

        $forum_themes = mysqli_query($connect, "SELECT * FROM `forum_themes`");
        
    ?>
</pre>

    <br/>

    <div> 
        Темы
    </div>

    <?php 
        while($theme = mysqli_fetch_assoc($forum_themes)){
    ?>
    <div>
        <div>
            <a href="theme.php?theme_id=<?= $theme["id"] ?>"><?= $theme["title"] ?></a>
            <a href="delete.php?theme_id=<?= $theme["id"] ?>">Удалить</a>
            <a href="update.php?theme_id=<?= $theme["id"] ?>">Изменить</a>
        </div>
    </div>

    <?php
        };            
    ?>

    <form action="create_theme.php" method="POST">
        <p>Название темы</p>
        <input name="theme_name" type="text">
        
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
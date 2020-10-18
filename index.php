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

        require "connect.php";

        $forum_themes = mysqli_query($connect, "SELECT * FROM `forum_themes`");
        $forum_themes = mysqli_fetch_all($forum_themes);

        print_r($forum_themes);
    ?>
</pre>

    <br/>

    <div> 
        Темы
    </div>

    <?php 

        foreach($forum_themes as $theme){

    ?>
    <div>
        <div>
            <a href="vendor/theme.php?theme_id=<?= $theme[0] ?>"><?= $theme[1] ?></a>
            <a href="delete.php?theme_id=<?= $theme[0] ?>">Удалить</a>
            <a href="update.php?theme_id=<?= $theme[0] ?>">Изменить</a>
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
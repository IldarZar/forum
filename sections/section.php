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
            require "../data/db_data.php";
            $connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
            mysqli_set_charset($connect, "utf-8");

            $theme_id = $_GET["theme_id"];
            $section_id = $_GET["section_id"];
            $values = mysqli_query($connect, "SELECT * FROM forum_topics");
            while($value = mysqli_fetch_assoc($values)){
                if($value["section_id"] == $section_id){
        ?>
                    <div>
                        <a href="topics/topic.php?theme_id=<?= $theme_id ?>&section_id=<?= $section_id ?>&topic_id=<?= $value["id"] ?>"><?= $value["title"] ?></a>
                        <a href="topics/delete_topic.php?theme_id=<?= $theme_id ?>&section_id=<?= $section_id ?>&topic_id=<?= $value["id"] ?>">Удалить</a>
                    </div>
        <?php
                };
            };
        ?>

    </pre>

    <form action="./topics/create_topic.php?theme_id=<?= $theme_id ?>&section_id=<?= $section_id ?>" method="POST">
        <p>Название обсуждения</p>
        <input name="topic_name" type="text">
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
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


            $theme_id = $_GET["theme_id"];
            $section_id = $_GET["section_id"];

            var_dump($section_id);
            var_dump($theme_id);

            $values = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM forum_topics"));
            print_r($values);
            foreach($values as $value){
                if($value[2] == $section_id){
        ?>
                    <div>
                        <a href=""><?= $value[1] ?></a>
                        <a href="./topics/delete_topic.php?theme_id=<?= $theme_id ?>&section_id=<?= $section_id ?>&topic_id=<?= $value[0] ?>">Удалить</a>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        Разделы
        <pre>
            <?php 
                require "data/db_data.php";

                $theme_id = $_GET['theme_id'];
                $values = mysqli_query($connect, "SELECT * FROM forum_sections");
                while($value = mysqli_fetch_assoc($values)){
                    if ($value['theme_id'] == $theme_id){
            ?>
                <div>
                    <a href="./sections/section.php?theme_id=<?= $value['theme_id'] ?>&section_id=<?= $value['id'] ?>"><?= $value["title"] ?></a> 
                    <a href="./sections/delete_section.php?theme_id=<?= $value['theme_id'] ?>&section_id=<?= $value['id'] ?>">Удалить</a>
                </div>
            <?php
                    };
                };

            ?>
        </pre>

        <form action="sections/create_section.php?theme_id=<?= $theme_id ?>" method="POST">
            <p>Название раздела</p>
            <input name="section_name" type="text">
        
            <button type="submit">Добавить</button>
        </form>
</body>
</html>

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
                require "../connect.php";
                $theme_id = $_GET['theme_id'];
                $values = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM forum_sections")); 
                print_r($values);

                foreach($values as $value){
                    if ($value[1] == $theme_id){
            ?>
                <div>
                    <a href="./sections/section.php?theme_id=<?= $value[1] ?>&section_id=<?= $value[0] ?>"><?= $value[2] ?></a> 
                    <a href="./sections/delete_section.php?theme_id=<?= $value[1] ?>&section_id=<?= $value[0] ?>">Удалить</a>
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
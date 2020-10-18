<?php
    require "connect.php";
    var_dump($_GET["id"]);
    $theme_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="vendor/update.php?theme_id=<?= $theme_id ?>" method="POST">
        <p>Название темы</p>
        <input name="theme_name" type="text">
        
        <button type="submit">Обновить</button>
    </form>

</body>
</html>
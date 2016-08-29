<?php
require "../functions/functions.php";
if (isset($_POST['title_article']) || isset($_POST['info_article']))
{
    add_article($_POST['title_article'], $_POST['info_article']);

    unset($_POST['title_article']);
    unset($_POST['info_article']);

    if ($error = error()) {
        echo $error;
    } else {
        header("Location: ../index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить статью</title>
</head>
<body>
<form method="post">
    <p>Введите заглавие: <input type="text" name="title_article"></p>
    <p>Введите содержание: <input type="text" name="info_article"></p>
    <p><input type="submit" value="Отправить"></p>
</form>

<form action="../index.php">
    <input type="submit" value="Главная">
</form>

</body>
</html>
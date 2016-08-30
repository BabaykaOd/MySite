<?php

require (__DIR__ . "/../models/Article.php");
require "../functions/functions.php";

if(isset($_GET['deleteArticle'])) {
    Article::delete__article($_GET['deleteArticle']);

    unset($_GET['deleteArticle']);

    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Удалить статью</title>
</head>
<body>
<form method="get">
    <p>Введите номер статьи которую хотите удалить:
    <input type="number" name="deleteArticle"></p>
    <p><input type="submit" value="Удалить"></p>
</form>
</body>
</html>
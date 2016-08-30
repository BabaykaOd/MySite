<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 21:59
 */
session_start();
require_once("../functions/sql_query.php");
require_once ("../functions/functions.php");
require (__DIR__ . "/../models/Article.php");

if ($error = error()) {
    echo $error;
}

$query = "SELECT * FROM `article` WHERE 1";
$all_article = sqlQueryGetALL($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<table border="1">
    <caption>Последние статьи</caption>
    <?php foreach ($all_article as $res) : ?>
        <tr>
            <td><h2><?php echo $res['title_article'] ?></h2></td>
        </tr>
        <tr>
            <td>
                <?php echo $res['info_article'], "<br>", "Номер статьи: ", $res['id_article'] ?>
            </td>
        </tr>
        <tr>
            <td></br></td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="AddArticleForm.php">
    <input type="submit" value="Добавить статью">
</form>

<form action="DeleteArticleForm.php">
    <input type="submit" value="Удалить статью">
</form>

<form action="SearchArticleForm.php">
    <input type="submit" value="Найти статью">
</form>

<form action="EditArcticleForm.php">
    <input type="submit" value="Изменить статью">
</form>

</body>
</html>
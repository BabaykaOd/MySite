<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 21:59
 */
session_start();
require_once("functions/sql_query.php");
$query = "SELECT * FROM `article` WHERE 1";
$all_article = sql_query($query);
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
    <?php while ($res = mysql_fetch_assoc($all_article)) : ?>
    <tr>
        <td><h2><?php echo $res['title_article']?></h2></td>
    </tr>
    <tr>
        <td>
            <?php echo $res['info_article'], "<br>", "Номер статьи: ", $res['id_article']?>
        </td>
    </tr>
    <tr>
        <td></br></td>
    </tr>
    <?php endwhile; ?>
</table>

</p><form action="pages/AddArticleForm.html">
    <input type="submit" value="Добавить статью">
</form></p>

</p><form action="pages/DeleteArticleForm.html">
    <input type="submit" value="Удалить статью">
</form></p>
</body>
</html>


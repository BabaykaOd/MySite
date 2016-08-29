<?php

require "../functions/function_with_articles.php";
require "../functions/functions.php";

$id = $_GET['searchArticle'];
if(isset($id)) {
    $row = search_article($_GET['searchArticle']);
    $res = mysql_fetch_assoc($row);

    unset($_GET['searchArticle']);

    if ($error = error()) {
        echo $error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Найти  статью</title>
</head>
<body>
<form method="get">
    <p>Введите номер статьи которую хотите найти:
        <input type="number" name="searchArticle"></p>
    <p><input type="submit" value="Найти"></p>
</form>

<?php if ($res) : ?>
<table border="1">
    <tr>
        <td><h2><?php echo $res['title_article']?></h2></td>
    </tr>
    <tr>
        <td>
            <?php echo $res['info_article'], "<br>", "Номер статьи: ", $id?>
        </td>
    </tr>
</table>
<?php endif; ?>

<form action="../index.php">
    <input type="submit" value="Главная">
</form>

</body>
</html>
<?php

require (__DIR__ . "/../models/Article.php");
require "../functions/functions.php";

$id = $_GET['searchArticle'];
if(isset($id)) {
    $row = Article::search_article($_GET['searchArticle']);

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

<?php if ($row) : ?>
<table border="1">
    <tr>
        <td><h2><?php echo $row['title_article']?></h2></td>
    </tr>
    <tr>
        <td>
            <?php echo $row['info_article'], "<br>", "Номер статьи: ", $id?>
        </td>
    </tr>
</table>
<?php
$row = false;
endif; ?>

<form action="../index.php">
    <input type="submit" value="Главная">
</form>

</body>
</html>
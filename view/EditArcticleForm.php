<?php
require_once "../functions/function_with_articles.php";
require_once "../functions/functions.php";

$id = (int)$_GET['editArticle'];

if(isset($_GET['editArticle'])) {
    $row = search_article($id);
    $res = mysql_fetch_assoc($row);

    unset($_GET['editArticle']);

    if ($error = error()) {
        echo $error;
    }
}

if (isset($_POST['title_article']) || isset($_POST['info_article']))
{
    edit_article($id, $_POST['title_article'], $_POST['info_article']);

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
    <title>Редактирование</title>
</head>
<body>



<?php if ($res) : ?>
    <table border="1">
        <tr>
            <td>
                <form method="post">
                    <p>Введите заглавие: <input type="text" name="title_article"></p>
                    <p>Введите содержание: <input type="text" name="info_article"></p>
                    <p><input type="submit" value="Отправить"></p>
                </form>
            </td>
        </tr>
    </table>
<?php elseif(!$res) : ?>
    <form>
        <p>Введите номер статьи котрую хотите изменить:
            <input type="number" name="editArticle"></p>
        <input type="submit" value="Найти">
    </form>
<?php endif; ?>

</body>
</html>
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

<?php if (!empty($_GET['searchArticle'])) : ?>
<table>
    <tr>
        <td></td>
    </tr>
</table>
<?php endif; ?>

</body>
</html>
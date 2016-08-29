<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 22:01
 */

if (empty($_GET['searchArticle'])) {
    $_SESSION['error'] = 'Вы ничего не ввели';
    header("Location: ../pages/SearchArticleForm.php");
    die;
}

$id = (int)$_GET['searchArticle'];

$query = "SELECT `title_article`, `info_article` FROM `article` WHERE id_article=" . $id;
$ok = sql_query($query);
if (!$od) {
    $_SESSION['error'] = 'Такой статьи нет';
    header("Location: ../pages/SearchArticleForm.php");
    die;
}

header("Location: ../pages/SearchArticleForm.php");
die;
<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 21:58
 */
session_start();
require("/../functions/sql_query.php");

if (empty($_GET['deleteArticle'])) {
    $_SESSION['error'] = 'Вы ничего не ввели';
    header("Location: ../pages/DeleteArticleForm.html");
    die;
}

$id = (int)$_GET['deleteArticle'];

$query = "DELETE FROM `article` WHERE id_article=" . $id;
$ok = sql_query($query);
if (!ok) {
    $_SESSION['error'] = 'Вы ничего не ввели';
    header("Location: ../pages/DeleteArticleForm.html");
    die;
}

header("Location: ../index.php");
die;

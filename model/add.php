<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 21:57
 */
session_start();
require("/../functions/sql_query.php");

if(empty($_POST['title_article']) || empty($_POST['info_article'])) {
    $_SESSION['error'] = 'Одно из полей пусто';
    header("Location: ../pages/AddArticleForm.html");
    die;
}

$query = "INSERT INTO `news`.`article` (`id_article`, `title_article`, `info_article`)
               VALUES (NULL, '" . $_POST['title_article'] . "', '" . $_POST['info_article'] . "')";

sql_query($query);
header("Location: ../index.php");
die;
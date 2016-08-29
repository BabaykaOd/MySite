<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 29.08.2016
 * Time: 12:39
 */

function add_article($title, $info) {
    session_start();
    require("sql_query.php");

    if(empty($title) || empty($info)) {
        $_SESSION['error'] = 'Одно из полей пусто';
        return false;
    }

    $query = "INSERT INTO `news`.`article` (`id_article`, `title_article`, `info_article`)
               VALUES (NULL, '" . $title . "', '" . $info . "')";

    $ok = sql_query($query);
    return $ok;
}

function delete__article($id) {
    session_start();
    require("sql_query.php");

    if (empty($id)) {
        $_SESSION['error'] = 'Вы ничего не ввели';
        return false;
    }

    $query = "DELETE FROM `article` WHERE id_article=" . $id;
    $ok = sql_query($query);
    if (!$ok) {
        $_SESSION['error'] = 'Такой статьи нет';
        return $ok;
    }

    return $ok;
}

function search_article($id) {
    session_start();
    require("sql_query.php");

    if (empty($id)) {
        $_SESSION['error'] = 'Вы ничего не ввели';
        return false;
    }

    $query = "SELECT `title_article`, `info_article` FROM `article` WHERE id_article=" . $id;
    $ok = sql_query($query);
    if (!$ok) {
        $_SESSION['error'] = 'Такой статьи нет';
        return $ok;
    }

    return $ok;
}
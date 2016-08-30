<?php

/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 30.08.2016
 * Time: 14:11
 */
class Article
{
    private $title;
    private $info;

    public function __construct($title = "", $info = "")
    {
        $this->title = $title;
        $this->info = $info;
    }

    static public function add_article($title, $info) {
        session_start();
        require_once(__DIR__ . "/../functions/sql_query.php");

        if(empty($title) || empty($info)) {
            $_SESSION['error'] = 'Одно из полей пусто';
            return false;
        }

        $query = "INSERT INTO `news`.`article` (`id_article`, `title_article`, `info_article`)
               VALUES (NULL, '" . $title . "', '" . $info . "')";

        $ok = sqlQuery($query);
        return $ok;
    }

    static public function edit_article($id ,$title, $info) {
        session_start();
        require_once(__DIR__ . "/../functions/sql_query.php");

        if(empty($id)) {
            $_SESSION['error'] = 'Новость не выбрана';
            return false;
        }

        $query = "UPDATE `news`.`article` SET `title_article` = '" . $title . "' , `info_article` = '" . $info . "' 
                WHERE `article`.`id_article` = " . $id . " ";
        $ok = sqlQuery($query);
        return $ok;
    }



    static public function delete__article($id) {
        session_start();
        require_once(__DIR__ . "/../functions/sql_query.php");

        if (empty($id)) {
            $_SESSION['error'] = 'Вы ничего не ввели';
            return false;
        }

        $query = "DELETE FROM `article` WHERE id_article=" . $id;
        $ok = sqlQuery($query);
        if (!$ok) {
            $_SESSION['error'] = 'Такой статьи нет';
            return $ok;
        }

        return $ok;
    }

    static public function search_article($id) {
        session_start();
        require_once(__DIR__ . "/../functions/sql_query.php");

        if (empty($id)) {
            $_SESSION['error'] = 'Вы ничего не ввели';
            return false;
        }

        $query = "SELECT `title_article`, `info_article` FROM `article` WHERE id_article=" . $id;
        $ok = sqlQueryGetOnce($query);
        if (!$ok) {
            $_SESSION['error'] = 'Такой статьи нет';
            return $ok;
        }

        return $ok;
    }
}
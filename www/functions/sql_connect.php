<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 22:05
 */

define("SERVER", 'localhost');
define("USER_NAME", 'root');
define("PASSWORD", '');
define("DB_NAME", 'news');

$connect = mysql_connect(SERVER, USER_NAME, PASSWORD)
            or
            die(mysql_errno($connect).mysql_error($connect));

$db = mysql_select_db(DB_NAME, $connect) or die(mysql_errno($connect).mysql_error($connect)) or
    mysql_query("SET NAME 'utf-8'");
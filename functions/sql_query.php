<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 28.08.2016
 * Time: 23:18
 * @param $query
 * @return resource
 */

function sqlQuery($query) {
    require_once("sql_connect.php");
    $res = mysql_query($query);
    return $res;
}
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
    $row = mysql_query($query);
    return $row;
}

function sqlQueryGetALL($query) {
    require_once("sql_connect.php");
    $row = mysql_query($query);
    $data = [];
    while (false != $res = mysql_fetch_array($row)) {
        $data[] = $res;
    }
    return $data;
}

function sqlQueryGetOnce($query) {
    require_once("sql_connect.php");
    $row = mysql_query($query);
    $res = mysql_fetch_assoc($row);
    return $res;
}
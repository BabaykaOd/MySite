<?php
/**
 * Created by PhpStorm.
 * User: Бабайка
 * Date: 29.08.2016
 * Time: 14:59
 */

function error() {
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        unset($_SESSION['error']);
        return $error;
    }
    return false;
}
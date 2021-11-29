<?php
abstract class AdminBase {
    public static function checkLogged(){
        if (isset($_SESSION['auth'])) {
            return true;
        } else {
            echo 'Вы не вошли';
            return false;
        }
    }
    public static function checkLoggedNomess(){
        if (isset($_SESSION['auth'])) {
            return true;
        } else {
            return false;
        }
    }
}
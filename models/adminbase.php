<?php
abstract class AdminBase {
    public static function checkLogged(){
        if (isset($_SESSION['auth'])) {
            return true;
        } else {
            return false;
        }
    }
}
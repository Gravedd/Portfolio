<?php
require_once ROOT . '/models/adminbase.php';
class AdminController extends AdminBase {

    public function actionIndex() {//фукнция для url: http://portfolio/admin т.е главная страница админки
        if (!isset($_SESSION['auth'])) {//если админ не авторизован
            echo 'вы не авторизованны';
            echo '<a href="admin/login" class="accenttext2"> Нажмите чтобы войти </a>';
//          header('location: admin/login');
        } else {
            
        }
        return 'true';
    }



    public function actionLogin() {//фукнция для url: http://portfolio/admin т.е главная страница админки
        echo 'войти';
        require_once(ROOT.'/views/adminlogin.php');
        return 'true';
    }

    public function actionAuth() {
        var_dump($_POST);
        global $db, $connection;
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM users WHERE `login`='$login' AND `pass`='$pass'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $result = mysqli_fetch_assoc($result);
        if (isset($result)) {
            $_SESSION['auth'] = true;
            $_SESSION['login'] = $login;
            echo "<a href='../admin' class='accenttext2'>Вы вошли как: '$login'. Нажмите, чтобы продолжить";
        }
        return true;
    }

}
?>

<?php
require_once ROOT . '/models/adminbase.php';
require_once ROOT . '/models/admin.php';
class AdminController extends AdminBase {

    public function actionIndex() {//фукнция для url: http://portfolio/admin т.е главная страница админки
        if (!isset($_SESSION['auth'])) {//если админ не авторизован
            echo 'вы не авторизованны';
            echo '<a href="admin/login" class="accenttext2"> Нажмите чтобы войти </a>';
//          header('location: admin/login');
        } else {
            require_once(ROOT.'/views/admin.php');
        }
        return 'true';
    }



    public function actionLogin() {//фукнция для url: http://portfolio/admin т.е главная страница админки
        echo 'войти';
        if (AdminBase::checkLogged()) {
            echo "Вы уже вошли. <a href='admin' class='accenttext2'>Нажмите для перехода в админ-панель</a>";
        } else {
            require_once(ROOT.'/views/adminlogin.php');
        }
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

    public function actionEditpost($id) {
        $result = Admindb::getart($id);//получаем результат
        var_dump($result);
        require_once(ROOT.'/views/articleedit.php');//подключаем view-контроллер
        return true;
    }
    public function actionEditpreview() {
        require_once(ROOT.'/views/articlepreview.php');//подключаем view-контроллер
        return true;
    }
    public function actionSaveEditPost() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = $_POST['date'];
        $views = $_POST['views'];

        $result = Admindb::editArticle($id, $title, $content, $date, $views);
        if (isset($result)) {
            echo 'Пост был изменен';
            echo "<a href='../articles/$id' class='thintext accenttext2'>Вернутся к посту</a>";
        }
        return true;
    }

}
?>

<?php
require_once ROOT . '/models/adminbase.php';
require_once ROOT . '/models/admin.php';
class AdminController extends AdminBase {

    public function actionIndex() {//фукнция для url: http://portfolio/admin т.е главная страница админки
        if (!AdminBase::checkLogged()) {//если админ не авторизован
            echo '<a href="../../admin/login" class="accenttext2"> Нажмите чтобы войти </a>';
        } else {
            $count = Admindb::viewCount();
            require_once(ROOT.'/views/admin.php');
        }
        return 'true';
    }



    public function actionLogin() {
        if (AdminBase::checkLoggedNomess()) {
            echo "Вы уже вошли. <a href='admin' class='accenttext2'>Нажмите для перехода в админ-панель</a>";
        } else {
            require_once(ROOT.'/views/adminlogin.php');
        }
        return 'true';
    }

    public function actionAuth() {
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
        } else {
            echo "<span class='accenttext2'>Не верный логин/пароль</span><br>";
            echo "<a href='../admin/login' class='accenttext'>Нажмите чтобы войти</a><br>";
        }
        return true;
    }

    public function actionEditpost($id) {
        if (AdminBase::checkLogged()) {
            $result = Admindb::getart($id);//получаем результат
            require_once(ROOT . '/views/articleedit.php');//подключаем view-контроллер
        }
        return true;
    }
    public function actionEditpreview() {
        if (AdminBase::checkLogged()) {
            //изображение
            $from = $_FILES['imagefile']['tmp_name'];//где находится файл
            $filename = uniqid().'.png';//имя файла
            $to = ROOT."/uploads/temp/$filename";//куда переместить файл
            rename($from, $to);//перемещаем файл
            require_once(ROOT . '/views/articlepreview.php');//подключаем view-контроллер
        }
        return true;
    }
    public function actionaddposts() {
        if (AdminBase::checkLogged()) {
            require_once(ROOT . '/views/addarticle.php');
        }
        return true;
    }
    public function actionnewpostspreview() {
        if (AdminBase::checkLogged()) {
            //изображение
            $from = $_FILES['imagefile']['tmp_name'];//где находится файл
            $filename = uniqid().'.png';//имя файла
            $to = ROOT."/uploads/temp/$filename";//куда переместить файл
            rename($from, $to);//перемещаем файл

            require_once(ROOT . '/views/newarticlepreview.php');
        }
        return true;
    }
    public function actionAddnewpost() {
        if (AdminBase::checkLogged()) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = $_POST['date'];

            $filename = $_POST['imgname'];
            $from = ROOT."/uploads/temp/$filename";
            $to = ROOT."/uploads/images/$filename";//куда переместить файл
            rename($from, $to);//перемещаем файл

            $result = Admindb::addArticle($title, $content, $date, $filename);
            if (isset($result)) {
                echo 'Статья успешно добавлена';
                echo "<a href='../' class='thintext accenttext2'>Вернутся на главную</a>";
            }
        }
        return true;
    }
    public function actionSaveEditPost() {
        if (AdminBase::checkLogged()) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = $_POST['date'];
            $views = $_POST['views'];

            $filename = $_POST['imgname'];
            $from = ROOT."/uploads/temp/$filename";
            $to = ROOT."/uploads/images/$filename";//куда переместить файл
            rename($from, $to);//перемещаем файл

            $result = Admindb::editArticle($id, $title, $content, $date, $views, $filename);
            if (isset($result)) {
                echo 'Пост был изменен';
                echo "<a href='../articles/$id' class='thintext accenttext2'>Вернутся к посту</a>";
            }
        }
        return true;
    }
    public function actionDeletepost($id) {
        if (AdminBase::checkLogged()) {
            Admindb::deleteArticle($id);
            echo 'Статья удалена';
        }
        return true;
    }
    public function actionSeeAll() {
        if (AdminBase::checkLogged()) {
            $posts = Admindb::getAllPosts();
            require_once(ROOT . '/views/AllArticles.php');
        }
        return true;
    }
    public function actionLogout() {
        $_SESSION['auth'] = null;
        $_SESSION['login'] = null;
        echo "<span class=''>Вы вышли из аккаунта</span><br>";
        echo "<a href='../../' class='accenttext2'>Нажмите для перехода на главную</a><br>";
        echo "<a href='../admin/login' class='accenttext'>Нажмите чтобы войти</a><br>";
        return true;
    }

}
?>

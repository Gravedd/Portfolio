<?php
require_once ROOT . '/models/article.php';
class SiteController
{
    public function actionIndex() {
        require_once(ROOT.'/views/index.html');
        return 'true';
    }

}
?>

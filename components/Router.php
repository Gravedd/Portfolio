<?php
class Router {
    private $routes;
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';//путь до роутов
        $this->routes = include ($routesPath); // подлючаем роуты
    }

    private function getUrl() {//получить url(пример инкапсуляции)
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run(){
        //получить строку запроса
        $url = $this->getUrl();//получаем url
        //проверить наличие такого запроса в routes.php
        foreach ($this->routes as $urlpattern => $path) {
            //сравниваем $urlPattern и $url
            if (preg_match("~$urlpattern~", $url)) {

                //получить внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$urlpattern~", $path, $url);
                //определить контроллер, экшн, параметры
                $segments = explode('/', $internalRoute);
                //имя контроллера
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                //имя экшена
                $actionName = 'action'.ucfirst(array_shift($segments));

                /*//временно
                $err[] = "<br><small>Контролер: $controllerName <br>Экшен: $actionName </small><br>";
                var_dump($err);
                //конец временно*/
                $parameters = $segments;//здесь содержится параметры
                //url: test.ru/news/4343 - в массиве будет 4343




                //подключить файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                } else {
                    $err[]="ошибка, файла класса-контроллера '$controllerFile' не существует";
                }



                //создать объект, вызвть метод(action)
                $controllerObject = new $controllerName;
                //$result = $controllerObject->$actionName($parameters);
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);


                if ($result != null) {
                    break;
                }


            }






        }



    }

}


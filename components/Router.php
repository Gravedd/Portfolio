<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';//путь до роутов
        $this->routes = include($routesPath); // подлючаем роуты
    }

    private function getUrl()
    {//получить url
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
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
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                //имя экшена
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;//здесь содержится параметры
                //url: test.ru/news/4343 - в массиве будет 4343


                //подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                } else {
                    $err[] = "ошибка, файла класса-контроллера '$controllerFile' не существует";
                }

                //создать объект, вызвать метод(action)
                $controllerObject = new $controllerName;


                /* Вызываем необходимый метод ($actionName) у определенного
                 * класса ($controllerObject) с заданными ($parameters) параметрами,
                 * если он существует, иначе ошибка 404
                 */
                if (method_exists($controllerObject, $actionName)) {
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                } else {
                    $this->error404();
                }


                /*
                 * проверка на получаение результата от экшена от какого-либо контроллера
                 * если результата не будет то получится ошибка
                 * поэтому в методе контроллера функция должна возращать какое-либо значение
                 * return true; - пример
                 */
                if ($result != null) {//если функция не отдает результат, то будет ошибка!!!!
                    break;
                }


            }


        }


    }
    /*ОШИБКА 404*/
    public function error404() {
        require_once ROOT.'/views/error404.php';
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        exit;
    }

}


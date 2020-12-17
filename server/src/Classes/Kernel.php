<?php


namespace App;


class Kernel
{

    public $defaultControllerName = 'Home';

    public $defaultActionName = "index";

    public function launch()
    {

        list($controllerName, $actionName, $params) = \App::$router->resolve();
        echo $this->launchAction($controllerName, $actionName, $params);

    }


    public function launchAction($controllerName, $actionName, $params)
    {

        $controllerName = empty($controllerName) ? $this->defaultControllerName : ucfirst($controllerName);
        if(!file_exists(dirname(__FILE__) . '/Controllers/'.$controllerName.'.php')){
            echo (dirname(__FILE__) . '/Controllers/'.$controllerName.'.php');
            exit('Error');
            throw new \App\Exceptions\InvalidRouteException();
        }
        require_once dirname(__FILE__) . '/Controllers/'.$controllerName.'.php';
        if(!class_exists("\\App\\Controllers\\".ucfirst($controllerName))){
            throw new \App\Exceptions\InvalidRouteException();
        }
        $controllerName = "\\App\\Controllers\\".ucfirst($controllerName);
        $controller = new $controllerName;
        $actionName = empty($actionName) ? $this->defaultActionName : $actionName;
        if (!method_exists($controller, $actionName)){
            var_dump($controller);
            exit();
            throw new \App\Exceptions\InvalidRouteException();
        }
        return $controller->$actionName($params);

    }

}
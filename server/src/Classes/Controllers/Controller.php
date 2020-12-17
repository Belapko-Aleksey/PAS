<?php


namespace App\Controllers;


class Controller
{

    public $layoutFile = 'Views/Layout.php';

    public function renderLayout ($body)
    {

        ob_start();
        require dirname(__FILE__) . '/../../Views/Layout'.DIRECTORY_SEPARATOR."Layout.php";
        return ob_get_clean();

    }

    public function render ($viewName, array $params = [])
    {

        $viewFile = dirname(__FILE__) . '/../../Views'.DIRECTORY_SEPARATOR.$viewName.'.php';
        //echo $viewFile;
        extract($params);
        ob_start();
        require $viewFile;
        $body = ob_get_clean();
        ob_end_clean();
        if (defined(NO_LAYOUT)){
            return $body;
        }
        return $this->renderLayout($body);

    }

}
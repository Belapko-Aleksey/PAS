<?php

require_once dirname(__FILE__) . '../config.php';
require_once dirname(__FILE__) . '../requisites.php';
require_once dirname(__FILE__).'../../vendor/autoload.php';
use \RedBeanPHP\R as R;

class App

{

    public static $router;

    public static $db;

    public static $kernel;

    public static function init()
    {
        R::setup('mysql:host=' . BD_HOST . ';dbname=' . BD_NAME, BD_USER, BD_PASS);
        $isConnected = R::testConnection();
        if(!$isConnected)
            throw new \Exception("DB is not connected!");
        spl_autoload_register(['static','loadClass']);
        static::bootstrap();
        set_exception_handler(['App','handleException']);
    }

    public static function bootstrap()
    {
        static::$router = new App\Router();
        static::$kernel = new App\Kernel();
        //static::$db = new App\Db();
    }

    public static function loadClass ($className)
    {

        require_once ROOTPATH.'/Classes/Router'.'.php';
        require_once ROOTPATH.'/Classes/Kernel'.'.php';
    }

    public static function handleException (Throwable $e)
    {
        var_dump($e);
        if($e instanceof \App\Exceptions\InvalidRouteException) {
            echo static::$kernel->launchAction('Error', 'error404', [$e]);
        }else{
            echo static::$kernel->launchAction('Error', 'error500', [$e]);
        }

    }

}
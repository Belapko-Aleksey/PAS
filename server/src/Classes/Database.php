<?php

namespace App;

require_once dirname(__FILE__).'../../../vendor/autoload.php';

use \RedBeanPHP\R as R;

require_once dirname(__FILE__) . '../../config.php';

class Database
{
    private static $instances = null;

    protected function __construct()
    {
        $ret = R::setup('mysql:host=' . BD_HOST . ';dbname=' . BD_NAME, BD_USER, BD_PASS);
        $isConnected = R::testConnection();
        if(!$isConnected)
            throw new \Exception("DB is not connected!");
    }

    protected function __clone(){ }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance()
    {
        if (self::$instances==null) {
            self::$instances = R::class;
        }

        return self::$instances;
    }
}
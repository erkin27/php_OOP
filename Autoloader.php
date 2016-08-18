<?php

/**
 * Created by PhpStorm.
 * User: e.bokushev
 * Date: 18.08.2016
 * Time: 13:19
 */
class Autoloader
{
    public static function autoload($class)
    {
//        echo $class;
        $class = str_replace('\\', '/', $class);
        require_once $class.'.php';
    }
}

spl_autoload_register(['Autoloader', 'autoload']);
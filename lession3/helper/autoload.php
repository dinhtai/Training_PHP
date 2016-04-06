<?php
/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/5/16
 * Time: 15:39
 */
spl_autoload_register(function ($class_name) {
    include 'controllers/'.$class_name . '.php';
});

spl_autoload_register(function ($class_name) {
    include 'models/'.$class_name . '.php';
});
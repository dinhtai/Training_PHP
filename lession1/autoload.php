<?php
/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/5/16
 * Time: 15:39
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
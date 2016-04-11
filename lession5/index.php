<?php

define('BASE_PATH', dirname(__FILE__));
require(BASE_PATH . '/helper/autoload.php');

$route = ($_GET['route'] == '') ? 'home' : $_GET['route'];
$action = 'init';
$view = 'home';

$view = $route;
$controllerName = ucfirst($view) . 'Controller';
$controllerAction = $action . 'Action';

// khoi tao controller
$controllerInstance = null;

// check class exit
if (class_exists($controllerName)) {
    $controllerInstance = new $controllerName(array(
        'view' => $view,
        'action' => $action
    ));
} else {
    header('Location: /views/error.php?message=Data not found');
}

// check function exit
if (method_exists($controllerInstance, $controllerAction)) {
    $controllerInstance->{$controllerAction}();
} else {
    header('Location: /views/error.php?message=Data not found');
}


?>



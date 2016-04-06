<?php


define('BASE_PATH', dirname(__FILE__));

require(BASE_PATH . '/models/data.php');
$route = isset($_GET['route']) ? $_GET['route'] : 'home';
$path = BASE_PATH . "/controllers/{$route}.php";

if(file_exists($path)){
    require $path;
}else{
    header('Location: error.php?message=Data not found');
}
?>


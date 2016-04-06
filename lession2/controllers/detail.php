<?php
/**
 * Created by PhpStorm.
 * User: taind
 * Date: 4/6/16
 * Time: 15:18
 */
$id = $_GET['id'];
if (isset($dataNews[$id])) {
    require(BASE_PATH . '/views/detail/index.php');
} else {
    header('Location: error.php?message=Data not found');
}

?>

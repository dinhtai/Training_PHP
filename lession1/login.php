<?php
$msgSuccess = 'Login Success!!';
$msgError = 'UserName or Password is not correct!';
$userName = $_POST['user_name'];
$password = $_POST['pass_word'];
if ($userName == 'taind' && $password == '123456') {
    include(dirname(__FILE__) . '/news.php');
} else {
    echo "<script type='text/javascript'>alert('$msgError');</script>";
}

require_once 'autoload.php';
$test = new Test();
echo $test->newprop1;
$test->setNewProp('This is new property');
echo $test->getNewProp();
unset($test);

?>

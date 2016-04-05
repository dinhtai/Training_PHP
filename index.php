<html>
<pre>

<?php

require(dirname(dirname(__FILE__)) . '/Project1/common/data.php');
$path = dirname(dirname(__FILE__)) . '/Project1/views/home/home.php';

if (file_exists($path)) {
    include($path);
} else {
    echo 'file not found';
}

function getParams($request, $default)
{
    $route = '';
    if (isset($request['route'])) {
        $route = $request['route'];
    } else {
        $route = $default;
    }
    return $route;
}

// get params request
$router_params = getParams($_REQUEST, 'home');
$detail_path = dirname(dirname(__FILE__)) . '/Project1/views/' . $router_params . '/index.php';
if (file_exists($detail_path)) {
    include($detail_path);
} else {
    echo 'file not found';
}


?>

</pre>
</html>

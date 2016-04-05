<a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>"><h3>Home</h3></a>
<hr>
<ul>
    <li>
        <?php
        $router = $_REQUEST['route'];
        $id = $_REQUEST['id'];
        require(dirname(__FILE__) . '/data.php');
        if (isset($dataNews[$id])) {
            echo '<h2>' . $dataNews[$id]['key'] . '</h2>';
            echo "<div>" . $dataNews[$id]['content'] . "</div>";
        }
        ?>
    </li>
</ul>

<hr>


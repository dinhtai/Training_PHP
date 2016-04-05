<html>
<head>
</head>
<body>

<a href="<?php BASE_PATH.'home.php'?>" ><h3>Home</h3></a>
<hr>

<ul>
    <li><?php

        foreach ($data as $id => $item) {
            echo '<a href="detail.php?route=detail&id=' . $id . '"><h2>' . $item['key'] . '</h2></a>';
            echo "<div>" . $item['content'] . "</div>";
        }
        ?>
    </li>
</ul>

<hr>

</body>
</html>




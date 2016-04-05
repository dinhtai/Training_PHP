<html>
<head>
    <?php
    echo '<a href="http://' . $_SERVER['SERVER_NAME'] . '"><h3>Home</h3></a>';
    ?>
</head>
<body>
<?php
foreach ($data as $id => $item) {
    echo '<a href="http://' . $_SERVER['SERVER_NAME'] . '?route=detail&id=' . $id . '"><h2>' . $item['key'] . '</h2></a>';
    echo "<div>" . $item['content'] . "</div>";
}
?>
</body>
</html>




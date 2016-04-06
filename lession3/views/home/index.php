<html>
<head>
</head>
<body>
<h3>News</h3>
<hr>
<ul>
    <?php foreach ($data as $id => $item) { ?>
    <li>
        <h3><a href="index.php?route=detail&id=<?php echo $id ?>"><?php echo $item['key'] ?></a></h3>
        <p><?php echo $item['content'] ?></p>
        <?php } ?>
    </li>
</ul>

<hr>

</body>
</html>

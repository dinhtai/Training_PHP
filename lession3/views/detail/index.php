<a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>"><h3>Home</h3></a>
<hr>
<ul>
    <li>
        <h3><?php echo $data[$id]['key'] ?></h3>
        <p><?php echo $data[$id]['content'] ?></p>
    </li>
</ul>
<hr>
<h3>Tin liên quan:</h3><br>
<ul>
    <?php foreach ($data as $key => $item) { ?>
    <?php if ($key == $id) continue ?>
    <li>
        <a href="index.php?route=detail&id=<?php echo $key ?>"><?php echo $item['key'] ?></a>
        <?php } ?>
    </li>
</ul>




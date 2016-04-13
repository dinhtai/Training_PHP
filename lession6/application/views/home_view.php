<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>


<html>
<head>
</head>
<body>
<h3><a href="<?php echo 'admin' ?>" >Create</a></h3>
<h3><a href="<?php echo 'about' ?>" >About</a></h3>
<h3>News</h3>

<hr>
<ul>
    <?php foreach ($data as $id => $item) { ?>
    <li>
        <h3><a href="<?php echo base_url().'home/detail&id='.$id;?>"><?php echo $item['title'] ?></a></h3>
        <p><?php echo $item['content'] ?></p><br>
        <p><?php echo $item['modified'] ?></p>
        <h4><a href="<?php echo 'admin?id='. $id ?>">Edit</a></h4>
        <?php } ?>
    </li>
</ul>

<hr>

</body>
</html>

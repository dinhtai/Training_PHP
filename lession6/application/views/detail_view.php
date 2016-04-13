<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>"><h3>Home</h3></a>
<hr>
<ul>
    <li>
        <h3><?php echo $data[0]['title'] ?></h3>
        <p><?php echo $data[0]['content'] ?></p>
    </li>
</ul>
<hr>



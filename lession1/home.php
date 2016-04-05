<html>
<head>
</head>
<body>

<h3>Login</h3>
<hr>


<form action="login.php" method="post">
    User Name:<br>
    <input type="text" name="user_name"><br>
    Last Name:<br>
    <input type="password" name="pass_word"><br>
    <input type="submit" value="Login">
</form>

<h3>News</h3>
<hr>
<ul>
    <li>
        <?php

        foreach ($dataNews as $id => $item) {
            echo '<a href="detail.php?route=detail&id=' . $id . '"><h2>' . $item['key'] . '</h2></a>';
            echo "<div>" . $item['content'] . "</div>";
        }
        ?>
    </li>
</ul>

<hr>

</body>
</html>




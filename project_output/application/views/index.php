<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="//getbootstrap.com/favicon.ico">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="//getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="//getbootstrap.com/examples/blog/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="//getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav" style="height: 50px">
            <a class="navbar-brand" href="">
                <img alt="Brand" src="../brand-white.png" style="width: 80px; height:25px;">
            </a>
            <a class="navbar-text" style="color: white" href="<?php echo 'post'?>">Home</a>
            <a class="navbar-text" style="color: white" href="<?php echo 'profile'?>">Profiles </a>
            <a class="navbar-text" style="color: white" href="<?php echo 'docs' ?>">Messages</a>
            <a class="navbar-text" style="color: white" href="<?php echo 'docs' ?>">Docs</a>

            <div class="btn-group navbar-btn navbar-right">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    Menu <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="">Profile</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="<?php echo 'login/logout'?>">Logout</a></li>
                </ul>
            </div>

            <div class="form-group navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search">
            </div>

        </nav>
    </div>
</div>

<div class="container-fluid">
    <?php echo $content ?>
</div><!-- /.blog-main -->

<footer class="blog-footer">
    <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a
            href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="//getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="//getbootstrap.com/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="//getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

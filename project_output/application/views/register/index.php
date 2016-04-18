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

    <title>Login</title>

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
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container" style="width:500px;">
    <?php echo form_open('register/verify'); ?>
    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <div class="page-header">
                <h1>Register</h1>
            </div>
            <?= form_open() ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
                <p class="help-block">At least 4 characters, letters or numbers only</p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                <p class="help-block">A valid email address</p>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Enter a password">
                <p class="help-block">At least 6 characters</p>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirm password</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                       placeholder="Confirm your password">
                <p class="help-block">Must match your password</p>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
            </div>
            </form>
        </div>
    </div><!-- .row -->
    <?php echo form_close(); ?><br>
</div><!-- .container -->
</body>
</html>

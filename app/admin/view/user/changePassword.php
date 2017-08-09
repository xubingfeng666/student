<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">
    <script src="./static/js/jquery.min.js"></script>
    <script src="./static/js/jquery-1.11.3.min.js"></script>
    <script src="./static/bt3/js/bootstrap.min.js"></script>
</head>
<body>
<?php include './view/admin/header.php' ?>
<div  class="container">
    <?php include './view/admin/left.php' ?>

    <form class="form-horizontal" method="post" class="container" style="margin-left: 300px;">
        <div class="form-group">
            <label class="col-sm-2 control-label">旧密码:</label>
            <div class="col-sm-5">
                <input type="passw" class="form-control" name="oldPassword" required >
            </div>
        </div>
        <div class="form-group" style="margin-top: -150px;">
            <label for="inputPassword3" class="col-sm-2 control-label">新密码:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="newPassword" required>
            </div>
        </div>
        <div class="form-group" style="margin-top: -100px;">
            <label for="inputPassword3" class="col-sm-2 control-label">确认密码:</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="confirmPassword" required>
            </div>
        </div>
       <div class="form-group" style="margin-top: -60px;">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">修改</button>
                </div>
            </div>
    </form>
</div>
</body>
</html>
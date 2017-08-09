<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">
    <style>
        body{
            background: #eee;
        }
    </style>
</head>
<body>
<div class="jumbotron" style="text-align: center">
    <h1>登录首页</h1>
</div>
<div class="container" style="width: 40%;margin-top: 20px">
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name ="username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password"required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">验证码：</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="captcha" required>
                <br/>
                <img class="img-rounded" src="?s=admin/login/captcha" onclick="this.src=this.src+'&mt=' + Math.random()">

            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> 7天免登陆
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class=" btn btn-info btn-ls">登录</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
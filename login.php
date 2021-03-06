<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>用户名密码登录</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/common.css" rel="stylesheet">
</head>

<body class="form-body">
<form class="form-signin row">
    <h1 class="h3 mb-4 font-weight-normal mg-auto">欢迎登录</h1>
    <label for="inputEmail" class="sr-only">账号</label>
    <input type="email" id="inputEmail" class="form-control mb-3" placeholder="用户名" required="" autofocus="">

    <label for="inputPassword" class="sr-only">密码</label>
    <input type="password" id="inputPassword" class="form-control mb-3" placeholder="密码" required="">
    <label for="inputPassword" class="sr-only">验证码</label>
    <input type="text" id="inputCheckCode" class="form-control mb-3 w-50" placeholder="验证码" required="">
    <img class="checkCode" src="favicon.ico">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me">下次自动登录
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    <p class="mt-5 mb-3 text-muted">© 2018</p>
</form>


</body></html>
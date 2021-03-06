<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\phpstudy\WWW\blog\public/../application/admin\view\login\login.html";i:1507338913;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8"/>
    <title>李俊贤博客网后台登陆</title>
    <meta name="description"content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="__STATIC__/admin/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__STATIC__/admin/admin.ui/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="__STATIC__/admin/admin.ui/css/app.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="__STATIC__/admin/admin.ui/js/ie/html5shiv.js"></script>
    <script src="__STATIC__/admin/admin.ui/js/ie/respond.min.js"></script>
    <script src="__STATIC__/admin/admin.ui/js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xxl">
        <a class="navbar-brand block" href="">李俊贤博客网后台登陆管理</a>
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>管理员后台登陆</strong>
            </header>
            <form method="post" action="" class="panel-body wrapper-lg">
                <div class="form-group">
                    <label class="control-label">用户名</label>
                    <input required type="text" class="form-control input-lg" name="admin_username">
                </div>
                <div class="form-group">
                    <label class="control-label">密 码</label>
                    <input required type="password"  class="form-control input-lg" name="admin_password">
                </div>
                <div class="form-group" style="overflow: hidden;">
                    <label class="control-label">
                        <span>验证码</span>
                        <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?id='+Math.random()"/>
                    </label>
                    <input type="text"  class="form-control input-lg col-md-6" name="code">
                </div>
                <button type="submit" class="btn btn-primary">登陆后台</button>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small>Powered By lijunxian.pw<br> copyright &copy; 2017</small>
        </p>
    </div>
</footer>
<script src="__STATIC__/admin/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="__STATIC__/admin/bootstrap-3.3.7/js/bootstrap.js"></script>
<!-- App -->
<script src="__STATIC__/admin/admin.ui/js/app.js"></script>
<script src="__STATIC__/admin/admin.ui/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="__STATIC__/admin/admin.ui/js/app.plugin.js"></script>
</body>
</html>
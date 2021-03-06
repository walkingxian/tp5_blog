<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"E:\phpstudy\WWW\blog\public/../application/admin\view\webset\index.html";i:1508594738;s:63:"E:\phpstudy\WWW\blog\public/../application/admin\view\base.html";i:1508419847;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>博客后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="__STATIC__/admin/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/site.css" rel="stylesheet">
    <link href="__STATIC__/admin/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="__STATIC__/common/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="__STATIC__/admin/js/jquery.min.js"></script>
    <script src="__STATIC__/admin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="__STATIC__/common/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        i {
            color: #337ab7;
        }
    </style>
</head>
<body>
    <div class="container-fluid admin-top">
        <!--导航-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="index.html" style="color: white;margin-left: -14px">李俊贤的博客</a>
                    </h4>
                    <div class="navbar-header">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="http://www.kancloud.cn/manual/thinkphp5/118003" target="_blank"><i class="fa fa-w fa-file-code-o"></i>
                                    在线文档</a>
                            </li>
                            <li>
                                <a href="http://fontawesome.dashgame.com/" target="_blank"><i
                                        class="fa fa-w fa-hand-o-right"></i> 图标库</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="fa fa-w fa-user"></i>
                                <?php echo session('admin.admin_username'); ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url('admin/entry/pass'); ?>">修改密码</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--导航end-->
    </div>
    <!--主体-->
    <div class="container-fluid admin_menu">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
                <div class="panel panel-default" id="menus">
                    <!--栏目管理 start-->
                    <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample"
                         aria-expanded="false" aria-controls="collapseExample"
                         style="border-top: 1px solid #ddd;border-radius: 0%">
                        <h4 class="panel-title">栏目管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus collapse in" id="collapseExample">
                        <a href="<?php echo url('admin/category/index'); ?>" class="list-group-item">
                            <i class="fa fa-certificate" aria-hidden="true"></i>
                            <span class="pull-right" href=""></span>
                            栏目列表
                        </a>
                    </ul>
                    <!--栏目管理 end-->

                    <!--标签管理 start-->
                    <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2"
                         aria-expanded="false" aria-controls="collapseExample">
                        <h4 class="panel-title">标签管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus collapse in" id="collapseExample2">
                        <a href="<?php echo url('admin/tag/index'); ?>" class="list-group-item">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <span class="pull-right" href=""></span>
                            标签列表
                        </a>
                    </ul>
                    <!--标签管理 end-->

                    <!--文章管理 start-->
                    <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample3"
                         aria-expanded="false" aria-controls="collapseExample">
                        <h4 class="panel-title">文章管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus collapse in" id="collapseExample3">
                        <a href="<?php echo url('admin/article/index'); ?>" class="list-group-item">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <span class="pull-right" href=""></span>
                            文章列表
                        </a>
                        <a href="<?php echo url('admin/article/recycle'); ?>" class="list-group-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <span class="pull-right" href=""></span>
                            回收站
                        </a>
                    </ul>
                    <!--文章管理 end-->

                    <!--友链管理 start-->
                    <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample4"
                         aria-expanded="false" aria-controls="collapseExample">
                        <h4 class="panel-title">友链管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="#collapseExample4" aria-expanded="true">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus collapse in" id="collapseExample4">
                        <a href="<?php echo url('admin/link/index'); ?>" class="list-group-item">
                            <i class="fa fa-link" aria-hidden="true"></i>
                            <span class="pull-right" href=""></span>
                            友链首页
                        </a>
                    </ul>
                    <!--友链管理 end-->

                    <!--站点管理 start-->
                    <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample5"
                         aria-expanded="false" aria-controls="collapseExample">
                        <h4 class="panel-title">站点管理</h4>
                        <a class="panel-collapse" data-toggle="collapse" href="#collapseExample5" aria-expanded="true">
                            <i class="fa fa-chevron-circle-down"></i>
                        </a>
                    </div>
                    <ul class="list-group menus collapse in" id="collapseExample5">
                        <a href="<?php echo url('admin/webset/index'); ?>" class="list-group-item">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                            <span class="pull-right" href=""></span>
                            网站配置
                        </a>
                    </ul>
                    <!--站点管理 end-->
                </div>
            </div>
            <!--右侧主体区域部分 start-->
            <div class="col-xs-12 col-sm-9 col-lg-10">
                
<ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
    <li>
        <a href=""><i class="fa fa-cogs"></i>
            站点管理</a>
    </li>
    <li class="active">
        <a href="">站点配置</a>
    </li>
</ol>
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#tab1">站点配置</a></li>
</ul>
<form action="" method="post">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="5%">编号</th>
                    <th width="20%">配置名称</th>
                    <th width="40%">配置值</th>
                    <th >描述</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
                <tr class="webset-item">
                    <td class="webset-item-id"><?php echo $vo['webset_id']; ?></td>
                    <td class="webset-item-name"><?php echo $vo['webset_name']; ?></td>
                    <td class="webset-item-value">
<!--                         <input type="text" class="form-control" value="<?php echo $vo['webset_value']; ?>" onblur="change(this,<?php echo $vo['webset_id']; ?>)"> -->
                       <input type="text" class="form-control" value="<?php echo $vo['webset_value']; ?>">
                    </td>
                    <td><?php echo $vo['webset_des']; ?></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-success" onclick="changeItem(event)">提交</button>
        </div>
    </div>
</form>
<div class="pagination pagination-sm pull-right">
</div>
<script>
    function changeItem(e) {
        e.preventDefault();
        var data = [];
        $(".webset-item").each(function(index,item){
            data.push({
                webset_id:$(this).find(".webset-item-id").text(),
                webset_value:$(this).find(".webset-item-value input").val()
            })
        });

        $.post("<?php echo url('edit'); ?>",{data:data},function(res){
            if(res.valid)
            {
                //执行成功
                swal({
                    title:"修改成功",
                    text: res.msg,
                    type:"success"
                });
            }else{
                //执行失败
                swal({
                    title:"修改失败",
                    text: res.msg,
                    type:"error"
                });
            }
        },'json')
    }

    function change(obj,webset_id) {
        //获取配置值
        var webset_value = $(obj).val();
        $.post("<?php echo url('edit'); ?>",{webset_id:webset_id,webset_value:webset_value},function(res){
            if(res.code)
            {
                //执行成功
                swal({
                    title:"修改成功",
                    text: res.msg,
                    type:"success"
                });
            }else{
                //执行失败
                swal({
                    title:"修改失败",
                    text: res.msg,
                    type:"success"
                });
            }
        },'json')
    }
</script>

            </div>
        </div>
        <!--右侧主体区域部分结束 end-->
    </div>
    <!-- 底部 start -->
    <div class="master-footer" style="margin-top: 150px">
        <a href="http://www.houdunwang.com">Designed by xiaoxian |</a>
        <a href="http://www.hdphp.com">Powered by thinkphp5</a>
        <br>
        Powered by ThinkPHP5 © 2017-2022 www.lijunxian.pw
    </div>
    <!-- 底部 end -->
</body>
</html>

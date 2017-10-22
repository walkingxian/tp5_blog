<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"E:\phpstudy\WWW\blog\public/../application/admin\view\category\index.html";i:1507454055;s:63:"E:\phpstudy\WWW\blog\public/../application/admin\view\base.html";i:1508419847;}*/ ?>
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
            栏目管理</a>
    </li>
    <li class="active">
        <a href="">栏目列表</a>
    </li>
</ol>
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="">栏目列表</a></li>
    <li><a href="<?php echo url('store'); ?>">添加栏目</a></li>
</ul>
<form action="" method="post">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th width="80">编号</th>
                    <th>栏目名称</th>
                    <th width="200">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
                <tr>
                    <td><?php echo $vo['cate_id']; ?></td>
                    <td>
                        <?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$vo['level']); if(empty($vo['level']) || (($vo['level'] instanceof \think\Collection || $vo['level'] instanceof \think\Paginator ) && $vo['level']->isEmpty())): ?>
                            <span style="font-weight:bold;"><?php echo $vo['cate_name']; ?></span>
                        <?php endif; if(!(empty($vo['level']) || (($vo['level'] instanceof \think\Collection || $vo['level'] instanceof \think\Paginator ) && $vo['level']->isEmpty()))): ?>
                            <i class="fa fa-circle-o"></i>
                            <?php echo $vo['cate_name']; endif; ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="<?php echo url('addSon',['cate_id'=>$vo['cate_id']]); ?>">添加子类</a></li>
                                <li><a href="<?php echo url('edit',['cate_id'=>$vo['cate_id']]); ?>">编辑</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;" onclick="del(<?php echo $vo['cate_id']; ?>)">删除</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<!-- 删除提示模态框 start -->
<div class="modal fade" id="del-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">栏目删除</h4>
            </div>
            <div class="modal-body">确定删除该栏目？</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary change-confirm" data-dismiss="modal">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 删除提示模态框 end -->
<div class="pagination pagination-sm pull-right">
</div>
<script>

    function del(cate_id) {
        $("#del-modal").modal();
        $("#del-modal .change-confirm").on("click",function() {
            location.href = "<?php echo url('del'); ?>"+'?cate_id='+cate_id;
        })
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

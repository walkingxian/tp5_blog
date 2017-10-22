<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"E:\phpstudy\WWW\blog\public/../application/admin\view\article\store.html";i:1508245946;s:63:"E:\phpstudy\WWW\blog\public/../application/admin\view\base.html";i:1508419847;}*/ ?>
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
                
<link href="__STATIC__/admin/ueditor/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="__STATIC__/admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/admin/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__STATIC__/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
<ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
    <li>
        <a href=""><i class="fa fa-cogs"></i>
            文章管理</a>
    </li>
    <li class="active">
        <a href="">文章添加</a>
    </li>
</ol>
<ul class="nav nav-tabs" role="tablist">
    <li><a href="<?php echo url('index'); ?>">文章管理</a></li>
    <li class="active"><a href="">文章添加</a></li>
</ul>
<form class="form-horizontal" id="form"  action="" method="post">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">文章管理</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章标题</label>
                <div class="col-sm-9">
                    <input type="text" name="arc_title"  class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章作者</label>
                <div class="col-sm-9">
                    <input type="text" name="arc_author"  class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章排序</label>
                <div class="col-sm-9">
                    <input type="number" name="arc_sort"  class="form-control" placeholder="" value="100">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">所属分类</label>
                <div class="col-sm-9">
                    <select class="js-example-basic-single form-control" name="cate_id">
                        <option value="0">请选择分类</option>
                        <?php if(is_array($cateData) || $cateData instanceof \think\Collection || $cateData instanceof \think\Paginator): if( count($cateData)==0 ) : echo "" ;else: foreach($cateData as $key=>$vo): ?>
                            <option value="<?php echo $vo['cate_id']; ?>">
                                <?php $__FOR_START_5880__=0;$__FOR_END_5880__=$vo['level'];for($i=$__FOR_START_5880__;$i < $__FOR_END_5880__;$i+=1){ ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php } ?>
                                <?php echo $vo['cate_name']; ?>
                            </option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">标签</label>
                <div class="col-sm-9">
                    <?php if(is_array($tagData) || $tagData instanceof \think\Collection || $tagData instanceof \think\Paginator): if( count($tagData)==0 ) : echo "" ;else: foreach($tagData as $key=>$vo): ?>
                    <label class="checkbox-inline" style="margin-right:10px;margin-left:0px;">
                        <input type="checkbox" name="tag[]" value="<?php echo $vo['tag_id']; ?>"> <?php echo $vo['tag_name']; ?>
                    </label>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">缩略图</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" id="arc_thumb_input" class="form-control hidden" readonly="" value="" onchange="showPreview(this)">
                        <input type="text" class="form-control hidden" id="attachment_id" name="attachment_id"/>
                        <input type="text" class="form-control" id="arc_thumb_text" name="arc_thumb" readonly/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="selectImg()">
                                <span class="glyphicon glyphicon-folder-open"></span> 选择图片
                            </button>
                        </span>
                    </div>
                    <div class="input-group" id="arc_thumbs" style="margin-top:5px;">
                        <img src="" id="arc_thumb" class="img-responsive img-rounded" width="150">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label"></label>
                <div class="col-sm-9">
                    <button class="btn btn-success" id="upload_arc_thumb" type="button" onclick="uploadImg()" disabled>
                        <span class="glyphicon glyphicon-upload"></span> 上传
                    </button>
                    <button class="btn btn-danger" id="remove_arc_thumb" type="button"  onclick="removeImg()">
                        <span class="glyphicon glyphicon-remove"></span> 移除
                    </button>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">文章摘要</label>
                <div class="col-sm-9">
                    <textarea type="text" name="arc_digest"  class="form-control" placeholder="文章摘要"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for=""  class="col-sm-2 control-label">文章内容</label>
                <div class="col-sm-9">
                    <script id="container" name="arc_content" type="text/plain" style="height:300px;width:100%;"></script>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">确定</button>
</form>
<script>
    var ue = UE.getEditor('container'); //初始化编辑器

    //显示预览图
    function showPreview(source) {
        if(!source.value) {
            removeImg();
            return;
        }else {
            document.getElementById("upload_arc_thumb").classList.remove("disabled");  //取消禁用移除
            document.getElementById("upload_arc_thumb").removeAttribute("disabled");  //取消禁用移除
            document.getElementById("arc_thumb_text").value = document.getElementById("arc_thumb_input").value; //text显示
        }
        var file= source.files[0];
        if(window.FileReader) {
            var fr = new FileReader();
            fr.onloadend = function(e) {
                document.getElementById("arc_thumb").src = e.target.result;
            }
            fr.readAsDataURL(file);
        }
    }

    //选中按钮时选中input
    function selectImg() {
        document.getElementById("arc_thumb_input").click();
    }

    //移除图片
    function removeImg() {
        document.getElementById("arc_thumb").src="";
        document.getElementById("upload_arc_thumb").classList.add("disabled");
        document.getElementById("upload_arc_thumb").setAttribute("disabled",true);
        document.getElementById("arc_thumb_input").value = "";
        document.getElementById("arc_thumb_text").value = "";
    }

    //上传图片
    function uploadImg() {
        var fileObj=$("#arc_thumb_input")[0].files[0];
        var formData=new FormData();
        formData.append('file',fileObj);
        $.ajax({
            url:"/system/component/uploader",
            type: 'POST',
            cache: false,
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if(data.data.attachment_id) {
                    document.getElementById("attachment_id").value = data.data.attachment_id;
                }
                //执行成功
                swal({
                    title:"上传图片",
                    text:data.msg,
                    type:"success"
                });
            },
            error:function(xhr,data) {
                swal({
                    title:"上传图片",
                    text:data.msg,
                    type:"error"
                });
            }
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

<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"E:\phpstudy\WWW\blog\public/../application/index\view\content\index.html";i:1508673262;s:63:"E:\phpstudy\WWW\blog\public/../application/index\view\base.html";i:1508660252;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo $headConf['title']; ?></title>
    <!--描述和摘要-->
    <meta name="Description" content="小贤的博客"/>
    <meta name="Keywords" content="博客"/>
    <!--载入公共模板-->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/bootstrap-3.3.7/css/bootstrap.min.css" />
    <script src="__STATIC__/index/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__STATIC__/index/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/index.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/backTop.css"/>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php echo $_webset['title']; ?></h1>
            </div>
        </div>
    </div>
</header>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >

                <div class="navbar-header">
                    <!-- 移动端按钮 -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">

                        <span class="sr-only">切换导航</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- 菜单 -->
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="_menu" >
                        <li <?php if(!input('param.')): ?> class="_active" <?php endif; ?>>
                            <a href="__ROOT__/index.html">首页</a>
                        </li>
                        <?php if(is_array($_cateData) || $_cateData instanceof \think\Collection || $_cateData instanceof \think\Paginator): if( count($_cateData)==0 ) : echo "" ;else: foreach($_cateData as $key=>$vo): ?>
                        <li <?php if(input('param.cate_id')==$vo['cate_id']): ?> class="_active"<?php endif; ?>>
                            <a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>">
                                <?php echo $vo['cate_name']; ?>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <!--标签规定文档的主要内容main-->
            <main class="col-md-8">
                
<style>
    img{
        width: 100%;
    }
</style>
<article>
    <div class="_head">
        <h1><?php echo $articleData['arc_title']; ?></h1>
        <span>
            <span>作者：</span>
            <a href=""><?php echo $articleData['arc_author']; ?></a>
        </span>
        •
        <!--pubdate表⽰示发布⽇日期-->
        <time pubdate="pubdate" datetime="2015年8月31日星期一晚上9点44"><?php echo date('Y-m-d',$articleData['sendtime']); ?></time>
    </div>
    <div class="_digest">
<!--         <p style="text-align:center;">
    <img src="<?php echo APP_ROOT . $articleData['path']; ?>" class="img-rounded" style="width:auto;">
</p> -->
        <p>
            <?php echo $articleData['arc_content']; ?>
        </p>
    </div>
    <div class="_footer">
        <i class="glyphicon glyphicon-tags"></i>
        <?php if(is_array($articleData['tags']) || $articleData['tags'] instanceof \think\Collection || $articleData['tags'] instanceof \think\Paginator): if( count($articleData['tags'])==0 ) : echo "" ;else: foreach($articleData['tags'] as $key=>$vo): ?>
        <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>"><?php echo $vo['tag_name']; ?></a>、
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</article>

            </main>
            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>关于我</h4>
                    <div class="_info">
                        <p>keep walking！</p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            <a href="/" target="_blank">小贤博客</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                        <?php if(is_array($_allCateData) || $_allCateData instanceof \think\Collection || $_allCateData instanceof \think\Paginator): if( count($_allCateData)==0 ) : echo "" ;else: foreach($_allCateData as $key=>$vo): ?>
                        <a href="<?php echo url('index/lists/index',['cate_id'=>$vo['cate_id']]); ?>">
                            <?php echo $vo['cate_name']; ?>
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                        <?php if(is_array($_tagData) || $_tagData instanceof \think\Collection || $_tagData instanceof \think\Paginator): if( count($_tagData)==0 ) : echo "" ;else: foreach($_tagData as $key=>$vo): ?>
                        <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>">
                            <?php echo $vo['tag_name']; ?>
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="_title">最新文章</h4>
                <?php if(is_array($_articleData) || $_articleData instanceof \think\Collection || $_articleData instanceof \think\Paginator): if( count($_articleData)==0 ) : echo "" ;else: foreach($_articleData as $key=>$vo): ?>
                <div id="" class="_single">
                    <p>
                        <a href="<?php echo url('index/content/index',['arc_id'=>$vo['arc_id']]); ?>">
                            <?php echo $vo['arc_title']; ?>
                        </a>
                    </p>
                    <time><?php echo date('Y年m月d日',$vo['sendtime']); ?></time>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                    <?php if(is_array($_tagData) || $_tagData instanceof \think\Collection || $_tagData instanceof \think\Paginator): if( count($_tagData)==0 ) : echo "" ;else: foreach($_tagData as $key=>$vo): ?>
                    <a href="<?php echo url('index/lists/index',['tag_id'=>$vo['tag_id']]); ?>"><?php echo $vo['tag_name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                    <?php if(is_array($_linkData) || $_linkData instanceof \think\Collection || $_linkData instanceof \think\Paginator): if( count($_linkData)==0 ) : echo "" ;else: foreach($_linkData as $key=>$vo): ?>
                    <p><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></p>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href=""><?php echo $_webset['title']; ?></a>
                |
                <a href=""><?php echo $_webset['copyright']; ?></a>
                |
                <a href=""><?php echo $_webset['email']; ?></a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="__STATIC__/index/js/backTop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        //插件使用
        $('.back_top').backTop({right:30});
    })
</script>
<div class="back_top hidden-xs hidden-md">
    <i class="glyphicon glyphicon-menu-up"></i>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\phpStudy\WWW\FastAdmin\public/../application/admin\view\assistant\upload.html";i:1563354437;s:68:"D:\phpStudy\WWW\FastAdmin\application\admin\view\layout\default.html";i:1562338655;s:65:"D:\phpStudy\WWW\FastAdmin\application\admin\view\common\meta.html";i:1563342684;s:67:"D:\phpStudy\WWW\FastAdmin\application\admin\view\common\script.html";i:1562338655;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<link rel="stylesheet" href="/assets/css/webuploader.css">
<link rel="stylesheet" href="/assets/css/ssi-uploader.css">
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<script src="/assets/js/jquery-3.0.0.min.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script src="/assets/js/webuploader.js"></script>
<script src="/assets/js/ssi-uploader.js"></script>
<script src="/assets/js/Uploader.swf"></script>
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="/assets/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.cityselect.js"></script>
</head>
<body>
<div class="container">
    <?php echo build_toolbar('refresh,add,edit,del'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>不带拖放区域：</h3>
                <input type="file" multiple id="ssi-upload"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div id="city">
                <select class="prov"></select>
                <select class="city" disabled="disabled"></select>
                <select class="dist" disabled="disabled"></select>
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#city").citySelect({
            url:"/assets/js/city.min.js",
            prov:"湖南", //省份
            city:"长沙", //城市
            dist:"岳麓区", //区县
            nodata:"none" //当子集无数据时，隐藏select
        });
    });
</script>
</body>
</html>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>
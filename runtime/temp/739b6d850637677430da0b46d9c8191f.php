<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"D:\phpStudy\WWW\FastAdmin\public/../application/admin\view\assistant\edit.html";i:1563346585;s:68:"D:\phpStudy\WWW\FastAdmin\application\admin\view\layout\default.html";i:1562338655;s:65:"D:\phpStudy\WWW\FastAdmin\application\admin\view\common\meta.html";i:1563342684;s:67:"D:\phpStudy\WWW\FastAdmin\application\admin\view\auth\rule\tpl.html";i:1562338655;s:67:"D:\phpStudy\WWW\FastAdmin\application\admin\view\common\script.html";i:1562338655;}*/ ?>
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
                                <form id="edit-form" class="form-horizontal form-ajax" role="form" method="POST" action="">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">ID:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo $query['id']; ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">活动名称:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="activity_name" name="activity_name" data-placeholder-node="<?php echo __('Node tips'); ?>" data-placeholder-menu="<?php echo __('Menu tips'); ?>" value="<?php echo $query['activity_name']; ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">活动内容:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="activity_content" name="activity_content" data-placeholder-node="<?php echo __('Node tips'); ?>" data-placeholder-menu="<?php echo __('Menu tips'); ?>" value="<?php echo $query['activity_content']; ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">图片路径:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="img_path" name="img_path" data-placeholder-node="<?php echo __('Node tips'); ?>" data-placeholder-menu="<?php echo __('Menu tips'); ?>" value="<?php echo $query['img_path']; ?>" disabled />
            <!--dom结构部分-->
            <div id="uploader-demo">
                <!--用来存放item-->
                <div id="fileList" class="uploader-list"></div>
                <div id="filePicker">选择图片</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">活动时间:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="activity_time" name="activity_time" data-placeholder-node="<?php echo __('Node tips'); ?>" data-placeholder-menu="<?php echo __('Menu tips'); ?>" value="<?php echo $query['activity_time']; ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">活动地点:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="activity_address" name="activity_address" data-placeholder-node="<?php echo __('Node tips'); ?>" data-placeholder-menu="<?php echo __('Menu tips'); ?>" value="<?php echo $query['activity_address']; ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">活动人数:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="activity_num" name="activity_num" data-placeholder-node="<?php echo __('Node tips'); ?>" data-placeholder-menu="<?php echo __('Menu tips'); ?>" value="<?php echo $query['activity_num']; ?>" data-rule="required" />
        </div>
    </div>
    <div class="form-group layer-footer">
        <div class="col-xs-2"></div>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed">提交</button>
            <button type="reset" class="btn btn-default btn-embossed" onclick="reload()">重置</button>
        </div>
    </div>
</form>
<style>
    #chooseicon {
        margin:10px;
    }
    #chooseicon ul {
        margin:5px 0 0 0;
    }
    #chooseicon ul li{
        width:41px;height:42px;
        line-height:42px;
        border:1px solid #efefef;
        padding:1px;
        margin:1px;
        text-align: center;
        font-size:18px;
    }
    #chooseicon ul li:hover{
        border:1px solid #2c3e50;
        cursor:pointer;
    }
</style>
<script id="chooseicontpl" type="text/html">
    <div id="chooseicon">
        <div>
            <form onsubmit="return false;">
                <div class="input-group input-groupp-md">
                    <div class="input-group-addon"><?php echo __('Search icon'); ?></div>
                    <input class="js-icon-search form-control" type="text" placeholder="">
                </div>
            </form>
        </div>
        <div>
            <ul class="list-inline">
                <% for(var i=0; i<iconlist.length; i++){ %>
                    <li data-font="<%=iconlist[i]%>" data-toggle="tooltip" title="<%=iconlist[i]%>">
                    <i class="fa fa-<%=iconlist[i]%>"></i>
                </li>
                <% } %>
            </ul>
        </div>

    </div>
</script>
<script>
    function reload(){
        window.location.reload();
    }
    // 图片上传demo
    var $ = jQuery,
            $list = $('#fileList'),
    // 优化retina, 在retina下这个值是2
            ratio = window.devicePixelRatio || 1,

    // 缩略图大小
            thumbnailWidth = 100 * ratio,
            thumbnailHeight = 100 * ratio,

    // Web Uploader实例
            uploader;

    // 初始化Web Uploader
    uploader = WebUploader.create({

        // 自动上传。
        auto: true,

        // swf文件路径
        swf: "/assets/js/Uploader.swf",

        // 文件接收服务端。
        server: "<?php echo url('assistant/edit'); ?>",

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',

        // 只允许选择文件，可选。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });

    // 当有文件添加进来的时候
    uploader.on( 'fileQueued', function( file ) {
        var $li = $(
                        '<div id="' + file.id + '" class="file-item thumbnail">' +
                        '<img>' +
                        '<div class="info">' + file.name + '</div>' +
                        '</div>'
                ),
                $img = $li.find('img');

        $list.append( $li );

        // 创建缩略图
        uploader.makeThumb( file, function( error, src ) {
            if ( error ) {
                $img.replaceWith('<span>不能预览</span>');
                return;
            }

            $img.attr( 'src', src );
        }, thumbnailWidth, thumbnailHeight );
    });

    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
                $percent = $li.find('.progress span');

        // 避免重复创建
        if ( !$percent.length ) {
            $percent = $('<p class="progress"><span></span></p>')
                    .appendTo( $li )
                    .find('span');
        }

        $percent.css( 'width', percentage * 100 + '%' );
    });

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).addClass('upload-state-done');
    });

    // 文件上传失败，现实上传出错。
    uploader.on( 'uploadError', function( file ) {
        var $li = $( '#'+file.id ),
                $error = $li.find('div.error');

        // 避免重复创建
        if ( !$error.length ) {
            $error = $('<div class="error"></div>').appendTo( $li );
        }

        $error.text('上传失败');
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        $( '#'+file.id ).find('.progress').remove();
    });
</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>
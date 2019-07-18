<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\phpStudy\WWW\FastAdmin\public/../application/admin\view\assistant\lists.html";i:1563355293;s:68:"D:\phpStudy\WWW\FastAdmin\application\admin\view\layout\default.html";i:1562338655;s:65:"D:\phpStudy\WWW\FastAdmin\application\admin\view\common\meta.html";i:1563342684;s:67:"D:\phpStudy\WWW\FastAdmin\application\admin\view\common\script.html";i:1562338655;}*/ ?>
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
    <title>活动列表</title>
</head>
<body>
<div class="panel panel-default panel-intro">

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        <?php echo build_toolbar('refresh,add,edit,del,import'); ?>
                    </div>
                    <table id="table" class="table table-bordered table-hover"
                           data-operate-edit="<?php echo $auth->check('auth/rule/edit'); ?>"
                           data-operate-del="<?php echo $auth->check('auth/rule/del'); ?>"
                           width="100%">
                        <thead>
                        <th>ID</th>
                        <th>名称</th>
                        <th>内容</th>
                        <th>图片路径</th>
                        <th>活动时间</th>
                        <th>活动地点</th>
                        <th>活动人数</th>
                        <th>状态</th>
                        <th>创建时间</th>
                        <th>更新时间</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><?php echo $v['id']; ?></td>
                                <td><?php echo $v['activity_name']; ?></td>
                                <td><?php echo $v['activity_content']; ?></td>
                                <td><?php echo $v['img_path']; ?></td>
                                <td><?php echo $v['activity_time']; ?></td>
                                <td><?php echo $v['activity_address']; ?></td>
                                <td><?php echo $v['activity_num']; ?></td>
                                <td><?php echo $v['state']==1?'进行中':'已结束'; ?></td>
                                <td><?php echo date('Y-m-d',$v['create_time']); ?></td>
                                <td><?php echo date('Y-m-d',$v['update_time']); ?></td>
                                <td>
                                    <a href="<?php echo url('assistant/edit',['id'=>$v['id']]); ?>" class="btn btn-success btn-edit btn-disabled" title="<?php echo __('Edit'); ?>" ><i class="fa fa-pencil"></i> <?php echo __('Edit'); ?></a>
                                    <button href="" class="btn btn-danger btn-del btn-disabled" title="<?php echo __('Delete'); ?>" ><i class="fa fa-trash"></i> <?php echo __('Delete'); ?></button>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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
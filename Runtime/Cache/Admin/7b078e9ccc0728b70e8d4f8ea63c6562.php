<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>后台管理</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="/Public/Admin/image/favicon.ico" />
	
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/select2_metro.css" />
    <link rel="stylesheet" href="/Public/Admin/css/DT_bootstrap.css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="<?php echo ($pageId); ?>">
	<!-- BEGIN LOGO -->
	
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" style="color:#FFF;padding-left:20px;" href="<?php echo U('Index/index');?>">武器大师</a>
				<!-- END LOGO -->  	             
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="username"><?php echo USERNAME;?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-user"></i> <?php echo USERNAME;?></a></li>
							<li><a href="<?php echo U('User/updatepass');?>"><i class="icon-lock"></i> 修改密码</a></li>
							<li><a href="<?php echo U('Login/logout');?>"><i class="icon-key"></i> 退出</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	
	
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->        
	<ul class="page-sidebar-menu">
		<li>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		</li>

        <?php if(is_array($auth['menu'])): $i = 0; $__LIST__ = $auth['menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li <?php if($item['cur']==1){ echo 'class="active"'; }?>>
                <a href="javascript:;">
                    <i class="icon-sitemap"></i>
                    <span class="title"><?php echo ($item['name']); ?></span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <?php if(is_array($item['child'])): $i = 0; $__LIST__ = $item['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$minfo): $mod = ($i % 2 );++$i; if($minfo['show']==1){?>
                        <li <?php if($minfo['cur']==1){ echo 'class="active"'; }?>>
                            <a href="<?php echo U($minfo['controller'].'/'.$minfo['action']); ?>"><?php echo $minfo['name']; ?></a>
                        </li>
                        <?php } endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->        
			<div class="container-fluid">
				

<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            广告管理
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="javascript:;">首页</a> 
                <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="javascript:;">广告组列表</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="icon-edit"></i>广告组</div>
                <!-- <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div> -->

            </div>

            <div class="portlet-body">
                <div class="clearfix">
                    <div class="btn-group">

                    <?php if($adtype){foreach($adtype as $key=>$val){?>
                        <a <?php echo $type==$key ? 'class="btn blue active"' : 'class="btn blue"';?>  href="<?php echo U('Adgroup/index', array('type'=>$key));?>">显示<?php echo $val;?></a>
                    <?php } } ?>
                    <br />

                    <?php if($adtype){foreach($adtype as $key=>$val){?>
                        <a href="javascript:;" class="btn purple <?php echo $type==$key ? 'active' : '';?>" onclick="saveConfig('<?php echo $key;?>');">更新<?php echo $val;?></a>
                    <?php } } ?>

                    <br />
                    
                    <?php if($adtype){foreach($adtype as $key=>$val){?>
                        <a href="<?php echo U('Adgroup/add', array('type'=>$key));?>" class="btn green <?php echo $type==$key ? 'active' : '';?>">
                            添加<?php echo $val;?>
                        </a>
                    <?php } } ?>
                    </div>

                    <!-- <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div> -->

                </div>

                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <tr>
                        <th>ID</th>
                        <th>广告名称</th>
                        <th>类型</th>
                        <th>规格(宽*高)</th>
                        <th>描述</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>

                    <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($list['id']); ?></td>
                            <td><?php echo ($list['name']); ?></td>
                            <td><?php echo ($adtype[$list['type']]); ?></td>
                            <td><?php echo ($list['width']); ?> * <?php echo ($list['height']); ?></td>
                            <td><?php echo ($list['description']); ?></td>
                            <td><?php echo $list['state'] ? '显示' : '隐藏';?></td>
                            <td class="set">
                                <a class="btn mini blue" href="<?php echo U('Advert/index', array('pid'=>$list['id']));?>">
                                <i class="icon-share"></i>广告管理</a>

                                <a class="btn mini purple" href="<?php echo U('Adgroup/edit', array('id'=>$list['id']));?>">
                                <i class="icon-edit"></i>编辑</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT -->


			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	
    <!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		2016 &copy; copyright by 武器大师.
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="icon-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="/Public/Admin/js/excanvas.min.js"></script>
	<script src="/Public/Admin/js/respond.min.js"></script>  
	<![endif]-->   
	<script src="/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/jquery.uniform.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->

	<!-- 日期控件 -->
	<script src="/Public/Admin/js/bootstrap-datepicker.js" type="text/javascript" ></script>
	<script src="/Public/Admin/js/bootstrap-datetimepicker.min.js" type="text/javascript" ></script>
	<script src="/Public/Admin/js/bootstrap-datetimepicker.zh-CN.js" type="text/javascript" ></script>

	<script src="/Public/Admin/layer/layer.js"></script>
	<script src="/Public/Admin/base.js" type="text/javascript" ></script>

	
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <!-- END PAGE LEVEL PLUGINS -->
    <script src="/Public/Admin/js/app.js" type="text/javascript"></script> 
    <!-- BEGIN PAGE LEVEL SCRIPTS --> 

    <script>
        function saveConfig(type){
            $.ajax({
                url : '<?php echo U("Adgroup/config");?>',
                data : {type : type},
                dataType : 'json',
                type : 'post',
                success : function(ret){
                    // alert(ret.msg);
                    if(ret.status==1){
                        layer.alert(ret.info, {icon: 6});
                        window.location.reload();
                    }else{
                        layer.alert(ret.info, {icon: 5});
                    }
                    
                }
            });
        }

        jQuery(document).ready(function() {       

            App.init();

            
        });

    </script>



	<!-- END JAVASCRIPTS -->
	<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
</body>
<!-- END BODY -->
</html>
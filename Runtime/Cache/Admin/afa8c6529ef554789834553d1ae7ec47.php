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
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/DT_bootstrap.css" />

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
				<a class="brand" style="color:#FFF;padding-left:20px;" href="<?php echo U('Index/index');?>">121同步</a>
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
			预约管理
		</h3>
		<ul class="breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="javascript:;">首页</a> 
				<i class="icon-angle-right"></i>
			</li>
		    <li><a href="javascript:;">预约列表</a></li>
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
				<div class="caption"><i class="icon-edit"></i>预约列表</div>
				<!-- <div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div> -->

			</div>

			<div class="portlet-body">
				<div class="clearfix">

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


				<div class="row-fluid">
					<div>
						<div id="sample_1_length" class="dataTables_length">
						<form class="form-horizontal" action="<?php echo U('Book/index');?>" method="get">
							<label>
								<select id="type" name="type" class="m-wrap small">
			                        <option value="">来源</option>
			                        <?php if(is_array($BOOK_TYPE)): $i = 0; $__LIST__ = $BOOK_TYPE;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($key==I('get.type')){ echo 'selected';} ?>><?php echo ($item); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			                    </select>
							</label>

							<label>
								<select id="status" name="status" class="m-wrap small">
			                        <option value="">状态</option>
			                        <?php if(is_array($BOOK_STATUS)): $i = 0; $__LIST__ = $BOOK_STATUS;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>" <?php if($key==I('get.status')){ echo 'selected';} ?>><?php echo ($item); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			                    </select>
							</label>
							<label>
							<button class="btn blue"  type="submit">
								<i class="icon-share"></i> 搜索
							</button>
							</label>
						</form>
						</div>
					</div>
				</div>

				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<tr>
						<th>ID</th>
			          	<th>姓名</th>
	                    <th>性别</th>
	                    <th>电话</th>
	                    <th>邮箱</th>
	                    <th>职位</th>
	                    <th>投资额度(单位：元)</th>
	                    <th>地区</th>
	                    <th>预约时间</th>
	                    <th>来源</th>
	                    <th>状态</th>
	                    <th>操作</th>
					</tr>

					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><tr>
				          	<th scope="row"><?php echo ($info['id']); ?></th>
				          	<td><?php echo ($info['name']); ?></td>
				          	<td><?php echo ((isset($BOOK_SEX[$info['sex']]) && ($BOOK_SEX[$info['sex']] !== ""))?($BOOK_SEX[$info['sex']]):"未知"); ?></td>
				          	<td><?php echo ($info['phone']); ?></td>
				          	<td><?php echo ($info['email']); ?></td>
				          	<td><?php echo ($info['position']); ?></td>
				          	<td><?php echo ($info['quota']); ?></td>
				          	<td><?php echo ($info['region']); ?></td>
				          	<td><?php echo ($info['add_time']); ?></td>
				          	<td><?php echo ($BOOK_TYPE[$info['type']]); ?></td>
							<td><?php echo ($BOOK_STATUS[$info['status']]); ?></td>
				          	<td>
				          		<!-- <a class="btn mini purple" href="javascript:;"><i class="icon-edit"></i>处理</a> -->

				          		<a class="btn mini black delete" href="javascript:;" data-id="<?php echo ($info['id']); ?>"><i class="icon-trash"></i>删除</a>

				          	</td>
			        	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					<tr>
						<td colspan="12">
							<div class="dataTables_paginate paging_bootstrap pagination"><?php echo ($page); ?></div>
						</td>
					</tr>			
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
		2016 &copy; copyright by 121同步.
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
	<script type="text/javascript"  src="/Public/Admin/js/app.js" type="text/javascript"></script> 

	<!-- BEGIN PAGE LEVEL SCRIPTS -->   
	<script type="text/javascript" >

		jQuery(document).ready(function() {       

		   App.init();


		   
			$(".delete").click(function(){
		   		var id = $(this).data('id');
			   layer.msg('确定删除本信息吗？', {
				  time: 0 //不自动关闭
				  ,btn: ['确定', '取消']
				  ,yes: function(index){
				    layer.close(index);
				    todelete(id, 4);
				  }
				});
		   });

		});

		function todelete(id, rmtr){
			layer.load(1);
            $.ajax({
                url : '<?php echo U("Book/process");?>',
                data : {id : id,rmtr : rmtr},
                dataType : 'json',
                type : 'post',
                success : function(ret){
                	layer.closeAll('loading');
                    if(ret.status==1){
                    	layer.alert(ret.info, {icon: 6});
                        window.location.reload();
                    }else{
                		layer.alert(ret.info, {icon: 5});
                    }
                }

            });
		}

	</script>



	<!-- END JAVASCRIPTS -->
	<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>
</body>
<!-- END BODY -->
</html>
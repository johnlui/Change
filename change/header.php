<?php
/*
Template Name: Change | 变
Description: 响应式 | 移动兼容 | 二级菜单支持 | 拖动你的窗口，不断变窄，你就会明白它的价值！
Version: 0.0.1
Author: DREN_A
Author Url: http://lvwenhan.com
Sidebar Amount: 0
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $site_title; ?></title>
	<meta name="keywords" content="<?php echo $site_key; ?>
	" />
	<meta name="description" content="<?php echo $site_description; ?>
	" />
	<meta name="generator" content="emlog" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>
	xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>
	wlwmanifest.xml" />
	<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>
	rss.php" />
	<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
	<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
	
	<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="http://libs.baidu.com/bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo TEMPLATE_URL; ?>main.js" type="text/javascript"></script>

	<link href="http://libs.baidu.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo TEMPLATE_URL; ?>bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
	<?php doAction('index_head'); ?>
<!--[if lt IE 9]>
<style>
.g-sd{background:#464646;}
.m-title{background:#4e4e4e;}
.m-title a:hover{color:#cacaca;}
.m-about{border-top:1px solid #505050;border-bottom:1px solid #4a4a4a;background:#373737;}
.m-nav{border-bottom:1px solid #3e3e3e;}
.m-nav li{border-top:1px solid #575757;border-bottom:1px solid #3e3e3e;background:#373737;}
.m-nav li:hover{background:#3b3b3b;}
.m-sch{border-top:1px solid #575757;border-bottom:1px solid #3e3e3e;}
.m-cprt{border-top:1px solid #575757;}
.m-cprt a:hover{color:#8e8e8e;}
.span6{width:600px;}
.offset5{margin-left:510px;}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle,.navbar-inverse .nav li.dropdown.active > .dropdown-toggle,.navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle,.navbar,.navbar-inverse .navbar-inner {filter: none;background-image: none;}
.container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container{width:1000px;}
</style>
<![endif]-->
</head>
<body>
	<div id="wrap">
		<div id="header">
			
			<div class="content span8 offset5">
				<h1>
					<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
				</h1>
				
				<h3><?php echo $bloginfo; ?></h3>
			</div>

		</div> <!-- end of #header -->
		
		<div class="navbar-wrapper">
			<!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
			<div class="container">

				<div class="navbar navbar-inverse">
					<div class="navbar-inner">
						<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
						<button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="brand" href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
						<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
						<div class="nav-collapse collapse" style="height: 0px;">
							<?php blog_navi();?>
						</div>
						<!--/.nav-collapse -->
					</div>
					<!-- /.navbar-inner -->
				</div>
				<!-- /.navbar -->

			</div>
			<!-- /.container -->
		</div>
		
		<div id="content">

		<div class="g-sd span1 offset0">
			<div class="g-sdc box">
				<div class="m-title">
					<a class="img" href="/"><img src="<?php if (get_blogger_photo()) {echo get_blogger_photo();} else {echo BLOG_URL.'admin/views/images/avatar.jpg';}?>" width="96" height="96"></a>
					<h4 class="ttl"><a href="/"><?php echo get_blogger_name(); ?></a></h4>
				</div>
				<div class="m-about box" id="j-about">
					<p></p>
				</div>
				<div class="m-nav">
					<ul>
						<?php get_sort_list_for_left(); ?>
						<li class="last"><a href="<?php echo BLOG_URL; ?>rss.php">RSS<span class="arrow"></span></a></li>
					</ul>
				</div>
				<!-- Search: 显示搜索框时,才有 -->
				
				<div class="m-sch">
					<form class="form" method="get" action="<?php echo BLOG_URL; ?>index.php">
						<input type="text" name="keyword" class="txt" value="搜索" onfocus="if(this.value=='搜索'){this.value='';}" onblur="if(this.value==''){this.value='搜索';}">
					</form>
				</div>
				
				<!-- 尾部 -->
				<div class="m-cprt">&copy;&nbsp;<a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a><br>Powered by <a href="http://www.emlog.net/"  title="采用emlog系统" target="_blank">Emlog</a></div>
			</div>
		</div>

<script>
	shouye = 0;
<?php
//判断是否在首页
$URL=$_SERVER['REQUEST_URI'];
if ($URL=='/' or $URL=='/index.php'){
	echo "shouye = 1;";
}
?>
</script>
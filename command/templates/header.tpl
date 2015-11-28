<html lang="zh_CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="baidu-site-verification" content="1s3ZkogzSD" />
	<title>{$title}</title>
</head>
<!-- Bootstrap -->
<link rel="stylesheet" href="public/css/general.css">
<link rel="stylesheet" href="//libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="//libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	  <script src="//libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
	nav {
		opacity: 0.8;
	}
	nav:hover {
		opacity: 1.0;
	}
</style>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid"> 
		<!-- 移动端显示 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">折叠</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			<a class="navbar-brand" href="index.php">Infinity Studio</a>
		</div>
		<!-- 导航栏 -->
		<div class="collapse navbar-collapse" id="defaultNavbar1">
			<ul class="nav navbar-nav">
				<li class="{$mainActive}"><a href="index.php">主页<span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<!-- 下拉菜单 -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">我们的项目<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="{$fcActive}"><a href="project.php?pn=FoodCraft">FoodCraft 食物工艺</a></li>
						<li class="{$hmclActive}"><a data-rel="external" href="project.php?pn=HMCL">Hello Minecraft! Launcher</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
						<li><a href="http://blog.infinity-studio.org/">Blog</a></li>
						<li><a href="https://github.com/InfinityStudio">Github</a></li>
						<li><a href="http://www.infinity-studio.org:8081/">Jenkins CI</a></li>
						<li><a href="http://www.infinity-studio.org:8081/plugin/repository/">Maven</a></li>
				<li class="{$joinActive}"><a href="join.php">加入我们</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse --> 
	</div>
	<!-- /.container-fluid --> 
</nav>
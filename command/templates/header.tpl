{* Smarty header template *}
{*
	Copyright (C) 2015 Infinity Studio.

	This library is free software; you can redistribute it and/or
	modify it under the terms of the GNU Lesser General Public
	License as published by the Free Software Foundation; either
	version 2.1 of the License, or (at your option) any later version.

	This library is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
	Lesser General Public License for more details.

	You should have received a copy of the GNU Lesser General Public
	License along with this library; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
	MA 02110-1301  USA

    @author LasmGratel <lasm_gratel@hotmail.com>
    @author Cannon_fotter <gfyguofanyi@gmail.com>
*}
<html lang="zh_CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$title}</title>

</head>
<!-- Bootstrap -->
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="public/css/general.css">
<link rel="stylesheet" href="http://libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	  <script src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
	nav {
		opacity: 0.8;
	}
	nav:hover {
		opacity: 1.0;
	}
</style>
<body class="{$bodyClass}">
<nav class="navbar navbar-default">
	<div class="container-fluid"> 
		<!-- 移动端显示 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">折叠</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			<a class="navbar-brand" href="#">Infinity Studio</a>
		</div>
		<!-- 导航栏 -->
		<div class="collapse navbar-collapse" id="defaultNavbar1">
			<ul class="nav navbar-nav">
				<li class="{$mainActive}"><a href="index.php">主页<span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<!-- 下拉菜单 -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">我们的项目<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						{*<li class="{$EPActive}"><a href="/projects/ExoticPower.php">Exotic Power 异域之能</a></li>*}
						<li class="{$FCActive}"><a href="/projects/foodcraft.php">FoodCraft 食物工艺</a></li>
						<li class="{$HMCLActive}"><a data-rel="external" href="/projects/hmcl.php">Hello Minecraft! Launcher</a></li>
					</ul>
				</li>
                {*<li><embed src="http://www.xiami.com/widget/59728760_194882/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent"></embed></li>*}
			</ul>
			<ul class="nav navbar-nav navbar-right">
				{*<li class="dropdown">*}
					{*<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">更多链接<span class="caret"></span></a>*}
					{*<ul class="dropdown-menu" role="menu">*}
						<li><a href="http://blog.infinity-studio.org/">Blog</a></li>
						{*<li><a href="http://weblate.infinity-studio.org">Weblate</a></li>*}
						<li><a href="https://github.com/InfinityStudio">Github</a></li>
						<li><a href="http://www.infinity-studio.org:8081/">Jenkins CI</a></li>
						<li><a href="http://www.infinity-studio.org:8081/plugin/repository/">Maven</a></li>
					{*</ul>*}
				{*</li>*}
				<li class="{$joinActive}"><a href="join.php">加入我们</a></li>
				{*<li id="language-select">*}
					{*<form method="get" action="http://www.infinity-studio.org/index.php">*}
						{*<select name="languages">*}
							{*<option value="zh_CN">中文（中国）</option>*}
							{*<option value="en_US">English</option>*}
						{*</select>*}
						{*<input type="submit" value="Submit"/>*}
					{*</form>*}
				{*</li>*}
			</ul>
		</div>
		<!-- /.navbar-collapse --> 
	</div>
	<!-- /.container-fluid --> 
</nav>
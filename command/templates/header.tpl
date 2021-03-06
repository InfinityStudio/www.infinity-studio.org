{*
 * Infinity Studio Offcial Website.
 * Copyright (C) 2016 Infinity Studio.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author LasmGratel <lasm_gratel@hotmail.com>
 * @author Cannon_fotter <gfyguofanyi@gmail.com>
 *}
<!DOCTYPE html>
<html lang="zh_CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu-site-verification" content="1s3ZkogzSD" />
    <title>{$title}</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/css/general.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="//cdn.bootcss.com/csshake/1.5.0/csshake.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
	  <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        nav {
            opacity: 0.8;
        }

        nav:hover {
            opacity: 1.0;
        }
    </style>
    <!-- jQuery -->
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- pjax and nprogress -->
    <script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
    <link href="//cdn.bootcss.com/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/nprogress/0.2.0/nprogress.min.js"></script>
    <!-- pjax -->
    <script type="text/javascript" language="javascript">
        $(function() {
            $(document).pjax('a', 'body', {
                fragment: 'body',
                storage: true,
                timeout: 6000
            });
            $(document).on('submit', 'form', function(event) {
                $.pjax.submit(event, 'body', {
                    fragment: 'body',
                    timeout: 6000
                });
            });
            $(document).on('pjax:send', function() {
                NProgress.start();
            });
            $(document).on('pjax:complete', function() {
                NProgress.done();
            });
        });
    </script>
</head>

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
                    {if $nav} {foreach from=$nav key=k item=v}
                    <li><a href="{$v.nav_link}" title="{$v.nav_description}">{$v.nav_name}</a></li>
                    {/foreach} {/if}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!DOCTYPE html>
<?php
/**
 * Project: Infinity Studio Website
 * File: ExoticPower.php 
 * 
 * Copyright (C) 2015 Infinity Studio.
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 * 
 * @copyright 2015 Infinity Studio
 * @link http://www.infinity-studio.org/
 * @author LasmGratel <lasm_gratel@hotmail.com>
 * @package website
 * @category Website
 * @todo Logo
 * @name $globalVariableName
 */
function getbackground()
{
	
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Infinity Studio - Exotic Power</title>
    </head>
    <body style="background-image:url(/images/ep.jpg);background-repeat:no-repeat;background-position:center;">
		<?php
		error_reporting(E_ERROR | E_PARSE);
		require('../smarty/Smarty.class.php');
		$smarty = new Smarty;
		//Smarty Dir Config
		$smarty->template_dir = '../smarty/templates/';
		$smarty->compile_dir = '../smarty/templates_c/';
		$smarty->config_dir = '../smarty/configs/';
		$smarty->cache_dir = '../smarty/cache/';
		$smarty->assign('EPActive', 'active');
		$smarty->display('header.tpl');
		?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3"> <br>
				<h1 class="text-center">Exotic Power</h1>
				<h2 class="text-center">异域之能</h2>
					</br>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 col-md-offset-3">
					一个以Minecraft世界观设定为基础的科技Mod，主要内容包括异域能量、对应的机器如组装机、重构机、传送机等。<br />
					<a href="http://tieba.baidu.com/p/3995322593" data-rel="button" class="btn btn-info">转至贴吧介绍页面</a>
				</div>
			</div>

			<hr class="half-rule">

			<div class="row text-center">
				<div class="col-md-6 col-md-offset-3">
					一、什么是ExoticPower<br />
					ExoticPower是一个冒险、科技、魔法并存的多条科技线阵营Mod，不同阵营之间互相合作或者互相敌对，重在对异世界（下界、末地）的探索，以获得新能源为目标，包含长距定点能量传输元件、长距转移定位元件、无线传输器、大型空间现象发生元件等大型元件或机器，前期侧重于探险类。玩家在游戏中需选择一个阵营和其中的流派（科技线）发展，提升自己的能力（扩充科技线），达到imbac程度
					<br />
					二、Mod背景
					格林尼治历683年，科学家们在对非自然现象的调查中发现了一种与现存的科学和魔法作用力都不同的作用力，称之为第六作用力，也就是所谓“异域之能”。<br />
					异域之能被证实来自于末地的虚空中，很有可能是来自于被乱流吞噬的熵重组而成的能量，商人们看见了其中的利益，于是争相开发之。异域之能在世界中的存在形式为固定的“空间裂隙”，也就是俗称的“能量节点”。<br />
					然而五年后的688年，情况却开始变化，节点开始变得不稳定而容易崩溃，而世界则发生了所谓“崩坏”，怪物开始横行于世……政府倒台……人们人心惶惶危在旦夕……<br />
					这个时候人们内部产生了分歧，进而形成了3个阵营，又因为流派不同被划分为了9个职业，各个阵营都以自己的方式行事，然而并没有人知道谁的道路是正确的……<br />
					或许，这场崩坏，是神指引人类迈上新高度的开始，又或者，是神已经抛弃了人类......<br />
				</div>
			</div>
		</div>
<!---->
<!--		<hr class="half-rule">-->
<!---->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="text-center col-md-6 col-md-offset-3">-->
<!--					<p>Copyright &copy; 2015 Infinity Studio &middot; All Rights Reserved &middot; <a href="http://www.infinity-studio.org/" >Infinity Studio 官方网站</a></p>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
    </body>
</html>

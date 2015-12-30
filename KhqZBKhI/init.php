<?php
/**
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
 */
//Charset:UTF-8
header('Content-Type:text/html;charset=utf-8');
//ROOT
define('ROOT', substr(dirname(__FILE__), 0, -9));
//Timezone
date_default_timezone_set('Asia/Shanghai');
//Auto loader 妈妈再也不用担心我的学习
require ROOT . '/command/lib/LoadClass.php';
//TODO 干掉Smarty自带的Autoloader
require ROOT . '/command/lib/smarty/Smarty.class.php';
$loader = new Command\Lib\LoadClass();
$loader->register();
$loader->addNamespace('Command\Controller', ROOT . '/command/controller');
$loader->addNamespace('Command\Model', ROOT . '/command/model');
$loader->addNamespace('Command\Tools', ROOT . '/command/lib');
$loader->addNamespace('Command\Interfaces', ROOT . '/command/interfaces');
$loader->addNamespace('Command\Classes', ROOT . '/command/classes');
$loader->addNamespace('Command\Classes\htmltag', ROOT . '/command/classes/htmltag');
//Config
require ROOT . '/command/lib/config.inc.php';
$smarty = new Smarty();
//Smarty Dir Config
$smarty->setTemplateDir(ROOT . '/command/templates/a/');
$smarty->setCompileDir(ROOT . '/command/templates_c/');
$smarty->setConfigDir(ROOT . '/command/configs/');
$smarty->setCacheDir(ROOT . '/command/cache/');

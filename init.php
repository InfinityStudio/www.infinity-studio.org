<?php
/**
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
 * @author LasmGratel <lasm_gratel@hotmail.com>
 * @author Cannon_fotter <gfyguofanyi@gmail.com>
 */
//Charset:UTF-8
header('Content-Type:text/html;charset=utf-8');
//ROOT
define('ROOT',dirname(__FILE__));
//Timezone
date_default_timezone_set('Asia/Shanghai');
//Smarty
require ROOT.'/command/lib/smarty/Smarty.class.php';
$smarty = new Smarty();
//Auto load class
function __autoload($_className) {
    if (substr($_className, -10) == 'Controller') {
        require ROOT.'/command/controller/'.$_className.'.class.php';
    } elseif (substr($_className, -5) == 'Model') {
        require ROOT.'/command/model/'.$_className.'.class.php';
    }
}
//Smarty Dir Config
$smarty->template_dir = 'command/templates/';
$smarty->compile_dir = 'command/templates_c/';
$smarty->compile_dir = 'command/templates_c/';
$smarty->config_dir = 'command/configs';
$smarty->cache_dir = 'command/cache';
//init
require ROOT.'/command/lib/common.php';
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
require 'init.php';
if (isset($_GET['pn'])) {
    switch ($_GET['pn']) {
        case 'FoodCraft':
            $smarty->assign('title', 'Infinity Studio - FoodCraft 食物工艺');
            $smarty->assign('fcActive', 'active');
            $smarty->assign('pn', $_GET['pn']);
            break;
        case 'HMCL':
            $smarty->assign('title', 'Infinity Studio - HMCL 启动器');
            $smarty->assign('hmclActive', 'active');
            $smarty->assign('pn', $_GET['pn']);
            break;
        case 'ExoticPower':
            $smarty->assign('title', 'Infinity Studio - HMCL 启动器');
            //$smarty->assign('epActive', 'active');
            $smarty->assign('pn', $_GET['pn']);
            break;
        case 'Singularity':
            $smarty->assign('title', 'Infinity Studio - Singularity');
            //$smarty->assign('epActive', 'active');
            $smarty->assign('pn', $_GET['pn']);
            break;
        default:
            header('Location: http://www.infinity-studio.org/404.html');
            exit();
            break;
    }
} else {
    header('Location: 404.php');
}
$smarty->display('project.tpl', md5($_SERVER['REQUEST_URI']));
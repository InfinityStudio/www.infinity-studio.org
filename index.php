<?php
/*
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
//error_reporting(E_ERROR | E_PARSE);
//require('smarty/Smarty.class.php');
//$smarty = new Smarty;
require 'init.php';
if(isset($_COOKIE["language"])) {
    $smarty->assign('language',$_COOKIE["language"]);
}
else {
    setcookie("language","en_US");
}
if($_GET["languages"]=="zh_CN") {
    setcookie("language","zh_CN");
}
elseif($_GET["languages"]=="en_US") {
    setcookie("language","en_US");
}
else {
    setcookie("language","en_US");
}
$smarty->assign('language',$_COOKIE["language"]);
$smarty->assign('title','Infinity Studio');
$smarty->assign('mainActive', 'active');
$smarty->assign('bodyClass','bs-docs-home');
$smarty->display('index.tpl');
?>

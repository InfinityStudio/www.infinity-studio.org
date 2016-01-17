<?php
/**
 * Infinity Studio Offcial Website.
 * Copyright (C) 2015 Infinity Studio.
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
 */
use command\controller\AuthorController;

require 'init.php';
$smarty->assign('title','Infinity Studio - 成员介绍');
if(isset($_GET["pn"]))
{
    $_author = new AuthorController($smarty);
    $_author->show();
    $smarty->display('author.tpl', md5($_SERVER['REQUEST_URI']));
}
else
{
    header('Location: 404.php');
}

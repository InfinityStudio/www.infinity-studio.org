{* Smarty index template *}
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
{include file='header.tpl'}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3"> <br>
            <div class="alert alert-warning"><h1 class="text-center">对不起！你访问的网页被Sine吃了！</h1></div>
            <br />
            <h1 class="text-center"><a role="button" href="javascript:history.go(-1)" data-role="button" class="btn btn-info">返回上一页</a></h1>
            <br />
            <h4 class="text-center">如果你是网管，请报告以下错误：HTTP 404</h4>
        </div>
        <p id="logo"></p>
    </div>
</div>
{include file='footer.tpl'}
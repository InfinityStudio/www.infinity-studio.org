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
 * @author simon3000 <simon3000@163.com>
 *}
 <footer class="navbar-fixed-bottom">
   <div class="container">
       <div class="text-center">
           {if $nav}
               {foreach from=$footer key=k item=v}
                   <a href="{$v.nav_link}" title="{$v.nav_description}">{$v.nav_name}</a>
                   &nbsp;|
               {/foreach}
           {/if}
           {nocache}
               <script src="https://s4.cnzz.com/z_stat.php?id=1256855039&web_id=1256855039" language="JavaScript"></script>
           {/nocache}
           <br>
           Copyright &copy; 2016 <a href="http://www.infinity-studio.org">Infinity Studio</a> &middot; All Rights
           Reserved &middot;
       </div>
   </div>
 </footer>

</body>
</html>

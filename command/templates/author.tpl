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
{include file="header.tpl"}
<main>
    <div class="container">
        {if $author && $pos}
            <h2 class="text-center">
                {$author[$pos].name}
            </h2>
            <p>
                <img src="{$author[$pos].avatar}" class="img-responsive" alt="avatar">
            </p>
            <blockquote class="c">
                {$author[$pos].description}
            </blockquote>
        {/if}
    </div>
</main>
{include file="footer.tpl"}
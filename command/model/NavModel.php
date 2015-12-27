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
 * @author Cannon_fotter <gfyguofanyi@gmail.com>
 */
namespace Command\Model;

class NavModel extends Model
{
    public function getAllFront()
    {
        $_sql = "SELECT nav_name, nav_description, nav_link FROM is_nav WHERE show_front=1 ORDER BY nav_sort ASC";
        return parent::all($_sql);
    }

    public function getAllFooter()
    {
        $_sql = "SELECT nav_name, nav_description, nav_link FROM is_nav WHERE show_footer=1 ORDER BY nav_sort ASC";
        return parent::all($_sql);
    }
}
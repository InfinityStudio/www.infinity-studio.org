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
namespace Command\Model;
use Command\Tools\Db;
class Model
{

    public function multi($_sql)
    {
        $_db = DB::getDB();
        $_db->multi_query($_sql);
        DB::unDB($_result = null, $_db);
        return true;
    }

    public function nextId($_table)
    {
        $_sql = "SHOW TABLE STATUS LIKE '$_table'";
        $_object = $this->one($_sql);
        return $_object->Auto_increment;
    }

    protected function total($_sql)
    {
        $_db = DB::getDB();
        $_result = $_db->query($_sql);
        $_total = $_result->fetch_row();
        DB::unDB($_result, $_db);
        return $_total[0];
    }

    protected function one($_sql)
    {
        $_db = DB::getDB();
        $_result = $_db->query($_sql);
        $_objects = $_result->fetch_object();
        DB::unDB($_result, $_db);
        //return Tool::htmlString($_objects);
        return $_objects;
    }

    protected function all($_sql)
    {
        $_db = DB::getDB();
        $_result = $_db->query($_sql);
        $_html = array();
        while (!!$_objects = $_result->fetch_object()) {
            $_html[] = $_objects;
        }
        DB::unDB($_result, $_db);
        //return Tool::htmlString($_html);
        return $_html;
    }

    protected function aud($_sql)
    {
        $_db = DB::getDB();
        $_db->query($_sql);
        $_affected_rows = $_db->affected_rows;
        DB::unDB($_result = null, $_db);
        return $_affected_rows;
    }
}
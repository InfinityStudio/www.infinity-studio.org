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
 */

namespace command\classes;
class ArrayList
{
    private $arr=array();
    public function add($element)
    {
        array_push($this->arr,$element);
    }
    public function addAll($element)
    {
        array_merge($this->arr,$element);
    }
    public function contains($element)
    {
        return in_array($this->arr,$element);
    }
    public function get($element)
    {
        return $this->arr[$element];
    }
    public function indexOf($element)
    {
        return array_keys($this->arr,$element);
    }
    public function isEmpty()
    {
        return empty($this->arr);
    }
    public function remove($index)
    {
        unset($this->arr,$index);
    }
    public function removeObj($object)
    {
        unset($this->arr,$this->indexOf($object));
    }
    public function size()
    {
        return count($this->arr);
    }
}
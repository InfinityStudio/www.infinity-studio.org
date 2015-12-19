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

namespace Command\Classes;
class ArrayList
{
    private $arr = array();

    public function __construct($elements = array())
    {
        if (!empty($elements)) $this->arr = $elements;
    }

    public function add($element)
    {
        return (array_push($this->arr, $element)) ? true : false;
    }

    public function unshift($element)
    {
        return (array_unshift($this->arr, $element)) ? true : false;
    }

    public function pop()
    {
        return array_pop($this->arr);
    }

    public function addAll($list)
    {
        $before = $this->size();
        foreach ($list as $element) {
            $this->add($element);
        }
        $after = $this->size();
        return ($before < $after);
    }

    public function clear()
    {
        $this->arr = array();
    }

    public function get($element)
    {
        return $this->arr[$element];
    }

    public function set($index, $element)
    {
        $previous = $this->get($index);
        $this->arr[$index] = $element;
        return $previous;
    }

    public function contains($element)
    {
        return in_array($this->arr, $element);
    }

    public function indexOf($element)
    {
        return array_keys($this->arr, $element);
    }

    public function lastIndexOf($element)
    {
        for ($i = (count($this->arr) - 1); $i > 0; $i--) {
            if ($element == $this->get($i)) return $i;
        }
        return false;
    }

    public function isEmpty()
    {
        return empty($this->arr);
    }

    public function remove($index)
    {
        $element = $this->get($index);
        if (!is_null($element)) array_splice($this->arr, $index, 1);
        return $element;
    }

    public function size()
    {
        return count($this->arr);
    }

    public function toArray()
    {
        return $this->arr;
    }

    public function toJson()
    {
        return json_encode($this->arr);
    }

    public function range($offset, $length = null)
    {
        return array_slice($this->arr, $offset, $length);
    }

    public function removeRange($offset, $length)
    {
        array_splice($this->arr, $offset, $length);
    }

    // 列表排序
    public function ksort()
    {
        ksort($this->arr);
    }

    // 列表排序
    public function asort()
    {
        asort($this->arr);
    }

    // 逆向排序
    public function rsort()
    {
        rsort($this->arr);
    }

    // 自然排序
    public function natsort()
    {
        natsort($this->arr);
    }

    public function unique()
    {
        $this->arr = array_unique($this->arr);
    }
}
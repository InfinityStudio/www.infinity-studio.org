<?php
/**
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
 */

namespace command\classes\htmltag;

use Command\Classes\ArrayList;

class Container extends HTMLTag
{
    private $textlist;

    public function __construct()
    {
        $this->textlist = new ArrayList();
    }

    public function add($object)
    {
        $this->textlist->add($object);
    }

    public function remove($object)
    {
        $this->textlist->remove($object);
    }

    public function toHTML()
    {
        // TODO: Implement toHTML() method.

    }

    public function getTag()
    {
        // TODO: Implement getTag() method.
    }

    public function customCSS($css)
    {
        // TODO: Implement customCSS() method.
    }

}
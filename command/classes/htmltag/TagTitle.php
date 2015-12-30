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
namespace Command\Classes\htmltag;
class TagTitle extends HTMLTag
{
    private $texttype = "text-center";
    private $size = 1;

    public function toHTML()
    {
        return
            '<h' . $this->getSize() .
            ' class=\'' .
            $this->getTexttype() .
            '\'' .
            '>' .
            $this->getText() .
            '</h' . $this->getSize() . '>';
    }

    public function getTag()
    {
        return 'h' . $this->getSize();
    }

    public function customCSS($css)
    {
        // TODO: Custom the CSS.
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getTexttype()
    {
        return $this->texttype;
    }

    /**
     * @param string $texttype
     */
    public function setTexttype($texttype)
    {
        $this->texttype = $texttype;
    }


}
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
namespace Command\Classes;
class Project extends Page
{
    private $author = null;
    private $logo = null;

    /**
     * Project constructor.
     * @param string $description
     * @param null $author
     * @param string $name
     * @param string $logo
     * @param \smarty $smarty
     */
    public function __construct(&$smarty, $description, $author, $name, $logo = null)
    {
        parent::__construct($description, $name, $smarty);
        $this->setAuthor($author);
        $this->setLogo($logo);
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return null|string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param null|string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

}
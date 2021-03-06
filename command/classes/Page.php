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
namespace Command\Classes;

use Command\Interfaces\IHTMLObject;

class Page implements IHTMLObject
{
    private $description = '';
    private $name = '';
    protected $smarty;

    /**
     * Page constructor.
     * @param string $description
     * @param string $name
     * @param $smarty
     */
    public function __construct($description, $name, &$smarty)
    {
        $this->setSmarty($smarty);
        $this->setDescription($description);
        $this->setName($name);
    }

    /**
     * @param null $smarty
     */
    public function setSmarty($smarty)
    {
        $this->smarty = $smarty;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return the HTML of this page.
     */
    public function toHTML()
    {
        //TODO: returns the html of this page
        //$this->smarty->assign('test', $this->getDescription());
    }
}
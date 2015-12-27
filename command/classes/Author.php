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
class Author
{
    private $name = '';
    private $email = '';
    private $website = '';

    /**
     * Author constructor.
     * @param null $name
     * @param null $email
     * @param null $website
     */
    public function __construct($name, $email = null, $website = null)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setWebsite($website);
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param null $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}
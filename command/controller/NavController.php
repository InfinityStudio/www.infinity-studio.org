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
namespace Command\Controller;

use Command\Model\NavModel;

class NavController extends Controller
{
    public function __construct(&$smarty)
    {
        parent::__construct($smarty, new NavModel());
    }

    private function showFront()
    {
        $this->_smarty->assign('nav',$this->_model->getAllFront());
    }

    private function showFooter()
    {
        $this->_smarty->assign('footer',$this->_model->getAllFooter());
    }

    public function show()
    {
        $this->showFront();
        $this->showFooter();
    }
}
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
namespace Command\Tools;
class Db
{
    /**获取数据库句柄
     * @return \mysqli
     */
    public static function getDb()
    {
        $_mysqli = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        if (mysqli_connect_errno()) {
            echo 'Err:' . mysqli_connect_error();
            exit();
        }
        $_mysqli->set_charset('utf8');;
        return $_mysqli;
    }

    /**销毁数据库句柄
     * @param $_result \mixed 结果集
     * @param $_db \mixed 数据库句柄
     */
    public static function unDB(&$_result, &$_db)
    {
        if (is_object($_result)) {
            $_result->free();
            $_result = null;
        }
        if (is_object($_db)) {
            $_db->close();
            $_db = null;
        }
    }
}
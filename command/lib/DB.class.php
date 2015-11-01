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
class DB{

    public static $dbtype = 'mysql';
    public static $dbhost = '';
    public static $dbport = '';
    public static $dbname = '';
    public static $dbuser = '';
    public static $dbpass = '';
    public static $charset = '';
    public static $stmt = null;
    public static $DB = null;
    public static $connect = true;
    public static $debug = false;
    private static $args = array ();

    public function __construct() {
        self::$dbtype = 'mysql';
        self::$dbhost = '127.0.0.1';
        self::$dbport = '3306';
        self::$dbname = 'test';
        self::$dbuser = 'root';
        self::$dbpass = 'root';
        self::$connect = false;
        self::$charset = 'UTF8';
        self::connect ();
        self::$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        self::$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
//        self::$DB->setAttribute ( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
//        self::$DB->setAttribute ( PDO::ATTR_EMULATE_PREPARES, true );
        //self::execute ( 'SET NAMES ' . self::$charset );
    }
    public function __destruct() {
        self::close ();
    }
    public function connect() {
        try {
//            self::$DB = new PDO(self::$dbtype.':host='.self::$dbhost.';port='.self::$dbport.';dbname='.self::$dbname.self::$dbuser,self::$dbpass,array(
//                PDO::ATTR_PERSISTENT => self::$connect
//            ));
//            self::$dbtype.':host='.self::$dbhost.';port='.self::$dbport.';dbname='.self::$dbname,self::$dbuser,self::$dbpass
            self::$DB = new PDO('mysql:host=localhost;dbname=test','root','root');
        } catch ( PDOException $e ) {
            die ( "Connect Error Infomation:" . $e->getMessage() );
        }
    }
    public function close() {
        self::$DB = null;
    }
    public function exec($sql,$args) {
        self::getPDOError($sql);
        $a = self::$DB->prepare($sql);//->execute($args);
        //if ($a->execute($args) == false) echo 'fuck!';
        return $a->execute($args);
        //return self::$DB->execute($args);
    }
    public function fetch($sql,$args=array(),$type=1) {
        $result = array();
        self::$stmt = self::exec($sql,$args);
        self::getPDOError($sql);

        switch ($type) {
            case '0' :
                $result = self::$stmt->fetch(PDO::FETCH_ASSOC);
                break;
            case '1' :
                $result = self::$stmt->fetchAll();
                break;
            case '2' :
                $result = self::$stmt->rowCount();
                break;
        }
        self::$stmt = null;
        return $result;
    }
    private function getPDOError($sql) {
        if (self::$DB->errorCode() != '00000') {
            $info = (self::$stmt) ? self::$stmt->errorInfo () : self::$DB->errorInfo();
            echo (self::sqlError ('mySQL Query Error', $info [2], $sql ));
            exit ();
        }
    }
    private function sqlError($message = '',$info = '',$sql = '') {
        $html = '';
        if ($message){
            $html .=  $message;
        }
        if ($info) {
            $html .= '<br>SQLID: ' . $info ;
        }
        if ($sql) {
            $html .= '<br>ErrorSQL: ' . $sql;
        }
        throw new Exception($html);
    }
}
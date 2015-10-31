<?php

/**
 * Created by Cannon_fotter.
 * Date: 2015年10月31日 0031
 * Time: 11:24
 * Project: html
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
        self::$dbhost = '';
        self::$dbport = '3306';
        self::$dbname = 'tion';
        self::$dbuser = '';
        self::$dbpass = '';
        self::$connect = false;
        self::$charset = 'UTF8';
        self::connect ();
        self::$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        self::$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        self::$DB->setAttribute ( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
//        self::$DB->setAttribute ( PDO::ATTR_EMULATE_PREPARES, true );
        self::execute ( 'SET NAMES ' . self::$charset );
    }
    public function __destruct() {
        self::close ();
    }
    public function connect() {
        try {
            self::$DB = new PDO ( self::$dbtype . ':host=' . self::$dbhost . ';port=' . self::$dbport . ';dbname=' . self::$dbname, self::$dbuser, self::$dbpass, array (
                PDO::ATTR_PERSISTENT => self::$connect
            ) );
        } catch ( PDOException $e ) {
            die ( "Connect Error Infomation:" . $e->getMessage() );
        }
    }
    public function close() {
        self::$DB = null;
    }
    public function exec($sql,$args) {
        self::getPDOError($sql);
        self::$DB->prepare($sql);
        return self::$DB->execute($args);
    }
    public function fetch($sql,$args,$type=1) {
        $result = array();
        self::$stmt = self::exec($sql,$args);
        self::getPDOError($sql);
        self::$stmt->setFetchMode(PDO::FETCH_OBJ);
        switch ($type) {
            case '0' :
                $result = self::$stmt->fetch();
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
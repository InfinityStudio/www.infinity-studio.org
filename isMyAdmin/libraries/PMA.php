<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin main Controller
 *
 * @package PhpMyAdmin
 *
 */
namespace PMA\libraries;

/**
 * phpMyAdmin main Controller
 *
 * @package PhpMyAdmin
 *
 * @property object $userlink
 * @property object $controllink
 */
class PMA
{
    /**
     * Holds database list
     *
     * @var ListDatabase
     */
    protected $databases = null;

    /**
     * DBMS user link
     *
     * @var object
     */
    protected $userlink = null;

    /**
     * DBMS control link
     *
     * @var object
     */
    protected $controllink = null;

    /**
     * magic access to protected/inaccessible members/properties
     *
     * @param string $param parameter name
     *
     * @return mixed
     * @see http://php.net/language.oop5.overloading
     */
    public function __get($param)
    {
        switch ($param) {
        case 'databases' :
            return $this->getDatabaseList();
        case 'userlink' :
            return $this->userlink;
        case 'controllink' :
            return $this->controllink;
        }

        return null;
    }

    /**
     * magic access to protected/inaccessible members/properties
     *
     * @param string $param parameter name
     * @param mixed  $value value to set
     *
     * @return void
     * @see http://php.net/language.oop5.overloading
     */
    public function __set($param, $value)
    {
        switch ($param) {
        case 'userlink' :
            $this->userlink = $value;
            break;
        case 'controllink' :
            $this->controllink = $value;
            break;
        }
    }

    /**
     * Accessor to PMA::$databases
     *
     * @return ListDatabase
     */
    public function getDatabaseList()
    {
        if (null === $this->databases) {
            $this->databases = new ListDatabase(
                $this->userlink
            );
        }

        return $this->databases;
    }
}

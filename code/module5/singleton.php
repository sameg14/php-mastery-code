<?php

// Singleton: Ensure that only one instance of the object exists!

class MysqlDatabase
{
    /**
     * The instantiated instance of the object
     * @var MysqlDatabase
     */
    private static $instance;

    private function __construct()
    {
        echo 'Connecting to database....<br/>';
        //$mysqli = new mysqli('localhost','root','root','acashop');
    }

    /**
     * Get a singleton instance of the database
     * @return \MysqlDatabase
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$db = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db2 = MysqlDatabase::getInstance();
$db3 = MysqlDatabase::getInstance();
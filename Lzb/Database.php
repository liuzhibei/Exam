<?php

namespace Lzb;


class Database
{
    private static $db;
    public $host = 'localhost';
    public $user = 'root', $password = 'root';

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new self();
            return self::$db;
        }
    }

    public function getHostUserPassword()
    {
        return $this->host . $this->user .$this->password;
    }
}
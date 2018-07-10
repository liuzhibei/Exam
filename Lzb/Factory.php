<?php

namespace Lzb;


use Lzb\Database\Mysqli;
use Lzb\Database\PDO;

class Factory
{
    protected static $arr = [];

    static function getDatabase()
    {
        if (isset(self::$arr['db'])) {
            return self::$arr['db'];
        } else {
            self::$arr['db'] = new mysqli();
            self::$arr['db']->connect('localhost', 'root', '', 'test');
            return self::$arr['db'];
        }
    }
}
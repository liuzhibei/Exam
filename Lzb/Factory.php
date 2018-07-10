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
            self::$arr['db']->connect(config('database', 'master.host'), config('database', 'master.user'), config('database', 'master.passwd'), config('database', 'master.dbname'));
            return self::$arr['db'];
        }
    }

    static function getConfig()
    {
        if (isset(self::$arr['config'])) {
            return self::$arr['config'];
        } else {
            self::$arr['config'] = new Config();
            return self::$arr['config'];
        }
    }
}
<?php

namespace Lzb;


class Factory
{
    static function getDatabase()
    {
        $db = Database::getInstance();
        return $db;
    }
}
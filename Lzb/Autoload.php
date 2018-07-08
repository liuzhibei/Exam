<?php

namespace Lzb;


class Autoload
{
    static function autoload($class)
    {
        require BASE_DIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}
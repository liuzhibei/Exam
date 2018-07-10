<?php

namespace App\Orm;


use Lzb\Factory;

class Orm
{
    protected $db;
    function __construct()
    {
        $this->db = Factory::getDatabase();
    }
}
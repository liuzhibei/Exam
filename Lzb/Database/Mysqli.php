<?php

namespace Lzb\Database;


use Lzb\IDatabase;

class Mysqli implements IDatabase
{
    protected $db;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->db = $conn;
    }

    function query($sql)
    {
        $res = mysqli_query($this->db, $sql);
        return $res;
    }

    function close()
    {
        mysqli_close($this->db);
    }
}
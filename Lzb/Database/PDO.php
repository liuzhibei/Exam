<?php
namespace Lzb\Database;


use Lzb\IDatabase;

class PDO implements IDatabase
{
    protected $db;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->db = $conn;
    }

    function query($sql)
    {
        $res = $this->db->query($sql);
        return $res;
    }

    function close()
    {
        unset($this->db);
    }
}
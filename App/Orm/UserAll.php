<?php
namespace App\Orm;

use Lzb\Factory;

class UserAll implements \Iterator
{
    protected $ids;
    protected $data = [];
    protected $index;

    function __construct()
    {
        $db = Factory::getDatabase();
        $this->ids = $db->query('select id from user')->fetch_all(MYSQLI_ASSOC);
    }

    function current()
    {
        $id = $this->ids[$this->index]['id'];
        return new User($id);
    }

    function next()
    {
        $this->index++;
    }

    function valid()
    {
        return $this->index < count($this->ids);
    }

    function rewind()
    {
        $this->index = 0;
    }

    function key()
    {
        return $this->index;
    }
}
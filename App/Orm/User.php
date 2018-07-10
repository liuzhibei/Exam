<?php

namespace App\Orm;


class User extends Orm
{
    private $table = 'user';
    public $id, $name;

    function __construct($id)
    {
        parent::__construct();
        $res = $this->db->query('select * from '. $this->table . ' where id = ' . $id);
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
    }

    function __destruct()
    {
        $this->db->query("update {$this->table} set name = '{$this->name}' where id = {$this->id};");
    }
}
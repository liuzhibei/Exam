<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/10
 * Time: 12:39
 */

namespace Lzb;


interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);

    function query($sql);

    function close();
}
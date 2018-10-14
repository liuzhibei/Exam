<?php
namespace App\Controller\PhpFunction;

class StringFunction
{
    public static function addcslashes()
    {
        $str = 'kdjfkjdjfdkfn';
        echo $str . PHP_EOL;
        //两个参数都是必填要不然会报错
        echo addcslashes($str, 'na');
    }

    public static function chop()
    {
        $str = 'dfjkdfd a';
        echo $str . PHP_EOL;
        /*
         * 删除右侧字符，如果指定则只删除指定的字符
         * 如果没有指定删除默认空白符
         */
        echo rtrim($str, '');
    }

    public static function ord()
    {
        $a = 'abc';
        echo ord($a);
    }

    public static function chr()
    {
        $a = 98;
        echo chr($a);
    }

    public static function sprintf()
    {

    }
}
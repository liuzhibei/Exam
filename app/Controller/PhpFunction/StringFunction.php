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

    public static function addslashes()
    {
        $str = "wohi'jsdkfj'dkfjdkf";
        //给预定义常量转义（‘， “， null， \）；
        echo addslashes($str);
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
        //返回字符串中首个字符的ascii码；
        echo ord($a);
    }

    public static function chr()
    {
        $a = 98;
        //返回asicc码对应的字符
        echo chr($a);
    }

    public static function base64_encode()
    {
        $str = 'fkdjkfgfdgfdgdgfgdfgdgsdfdsfdfsdfgdfdfgfdg';
        //将数据按照base64编码
        echo base64_encode($str);
    }

    /**
     * @param $body (sting)
     * @param $chunklen int 76
     * @param $end string \r\n
     * @renrn string
     */
    public static function chunk_split()
    {
        $str = 'kds我是刘志北jfdkds4kfjksdfjkdffdfdsfdfdfdfdsfdsfdsfdsfsdfdf';
        //将字符串分割成小块非常有用。
        //例如将 base64_encode() 的输出转换成符合 RFC 2045 语义的字符串。
        //它会在每 chunklen 个字符后边插入 end。
        echo chunk_split($str, 2, "aaab\r\n");

    }

    public static function str_split()
    {
        $str = '我是刘志北kdfjds';
        //按照字节划分
        var_dump(str_split($str, 3));
    }

    /**
     * param $delimiter
     * param $string
     * param $limit
     * return array
     */
    public static function explode()
    {
        $str = 'ksdfjdkfj';
        //limit负数，是除了后limit个前边的都返回，证书则是返回前面limit个，且最后一个元素长度到最后
        var_dump(explode('s', $str, -1));
    }

    public static function implode()
    {
        $arr = array('fkdjf', 'fdskjfj', 'fdkfj');
        //将数组中的元素连接成一个字符串
        echo implode($arr, ',');
    }

    /**
     * param str
     * param str
     * param before false
     */
    public static function strstr()
    {
        $str = 'fjsdkfdsjfd';
        //返回needle在haystack中第一次出现到最后的字符串；
        //默认返回包含needle之后的
        echo strstr($str, 'j');
    }

    /**
     * param haystack string
     * param needle string
     * return bool | int
     * 这类函数都区分大小写
     */
    public static function strpos()
    {
        $str = 'fksdjfkdf';
        $needle = 'sdjf';
        var_dump(strpos($str, $needle));
    }

    public static function strrpos()
    {
        $str = 'fsdkfjdsf';
        $needle = 'Ds';
        var_dump(strrpos($str, $needle));
    }

    public static function substr()
    {
        $str = 'fdsfjdsfj';
        var_dump(substr($str, -4, 2));
    }

    public static function strReplace()
    {
        $search = ['a', 'b', 'c', 'd', 'e'];
        $replace = ['11', '22', '33', '44', '55'];
        $arr = ['abcdefg', 'abcdefg', 'abcdefg'];
        var_dump(str_replace($search, $replace, $arr));
    }

    /**
     * 了解%字母
     * %n\$字母前面是占位符
     */
    public static function sprintf()
    {
        var_dump(sprintf("%1\$fsfd%1\$ofkj%2\$e", 1233, 232));
    }

    /**
     * @desc 此函数用于序列化数据为数据流可以存储在任何地方
     */
    public static function serialize()
    {
        var_dump(serialize(['a'=>'1', 'b'=> 2]));
    }


}
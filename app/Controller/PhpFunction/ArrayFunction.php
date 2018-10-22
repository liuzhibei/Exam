<?php
namespace App\Controller\PhpFunction;

class ArrayFunction
{
    public static function array_change_key_case()
    {
        $a = [
            '333',
            '444'
        ];
        /*
         * 将数组键值转换为大\小写对关联数组有效,对数字数组无效,对其他数据类型有错误警告
         * CASE_UPPER = 1
         * CASE_LOWER = 0 默认值
         */

        var_dump(array_change_key_case($a, 1));
    }

    public static function array_chunk()
    {
        $a = [
            'fkjdf',
            'dkjf',
            'aa' => 'dfkjdfk',
            '4' => 'fkdjfkd',
        ];
        /*
         * 将数组按照指定大小分组
         * 如果传入的不是数组会抛出提醒
         * 第三个参数是否保留原键值默认为false
         */
        var_dump(array_chunk($a, 2, true));
    }

    public static function array_column()
    {
        $a = array(
            array(
                'id' => 2135,
                'first_name' => 'John',
                'last_name' => 'Doe',
            ),
            array(
                'id' => 3245,
                'first_name' => 'Sally',
                'last_name' => 'Smith',
            ),
            array(
                'id' => 5342,
                'first_name' => 'Jane',
                'last_name' => 'Jones',
                'jfdkf' => 'dkfjdk',
            ),
            array(
                'id' => 5343,
                'first_name' => 'Peter',
                'last_name' => 'Doe',
            )
        );
        /*
         * 可以重新组装数组的key和value
         * 当第二个参数传入null时候非常有用
         * 如果选定的key重复，后面的结果会覆盖前面的，也就是只会保留最后出现的
         */
        var_dump(array_column($a, null, 'id'));
    }

    public static function array_combine()
    {
        $a = [
            'aa' => '11',
            'aa' => '22',
            'cc' => true,
            'dd' => 44,
            55,
            false,
            123.3,
        ];
        var_dump(array_combine($a, $a));
    }

    public static function array_count_values()
    {
        $a = [0 => null, 1 => 1, 2 => 2, 1 => 3, 4 => 3, 'aa' => false];
        /*
         * 统计数组中每个值出现的次数
         * 所统计的数组的值必须是string或者int别的类型会抛出一个警告，不会统计不合格的值
         */
        var_dump(array_count_values($a));
    }

    /**
     * param callback
     * param array ...
     * return array
     */
    public static function array_map()
    {
        $arr = array('kdfj', 'kdjfdkf', 'fkjdk', 'kfjdkf');
        $arr2 = array('kdfj', 'kdjfd');
        //数组最后元素个数不变，没有返回就是null
        var_dump(array_map(function ($a, $b) {
            if ($a == $b) return $a . $b;
        }, $arr, $arr2));
    }

    /**
     * param arr array
     * param [searchvalue]
     * param strick false
     */
    public static function array_keys()
    {
        $arr = [
            'fkdj',
            'fkdjf',
            'djfk',
            'fkdj',
            'fkdj',
        ];
        var_dump(array_keys($arr, 'fkdj'));
    }


    public static function array_values()
    {
        $arr = [
            'a',
            'b',
            'c',
            'd',
            'a',
            'b'
        ];
        var_dump(array_values($arr));
    }

    /**
     * param key
     * param array
     * return bool
     */
    public static function array_key_exists()
    {
        $arr = [
            'fdj',
            'dfkj',
            'dkf',
        ];
        var_dump(array_key_exists('4', $arr));
    }

    public static function array_filter()
    {
        $arr = array('dkfd', 'kfdjskf', 'fkdj', 'dksjf', 'true', 'true');
        var_dump(array_filter($arr, function ($a) {
            if ($a == 'true') return false;
            return true;
        }));
    }

    /**
     * param array
     * param sort_rule
     */
    public static function array_unique()
    {
        $arr = array('a' => 'red', 'b', 'red', 'c', 'b' => 'red');
        var_dump(array_unique($arr));
    }

    /**
     * param $array, $array, $array
     * 与+区别，本函数是数组重新排序，字符串后面覆盖前面，+是无论数字/字符串键值都是放弃后面的重复键值
     */
    public static function array_merge()
    {
        $a = array('a', 'b', 'c', 'aa' => 'aa', 'bb' => 'bb');
        $b = array('e', 'f', 'g', 'aa' => 'dd', 'bb' => 'ee');
        var_dump(array_merge($a, $b));
        var_dump($a+$b);
    }

    public static function array_flip()
    {
        $a = array('a' => 22, 'b' => 22, 'c' => 'cc', 'd' => 'cc');
        var_dump(array_flip($a));
    }

    /**
     * 与array_merge相似无论是数字还是字符键都是后面覆盖前面与+完全相反
     */
    public static function array_replace()
    {
        $a = array('aa' => 'aa', 'bb' => 'bb', 'cc', 'dd');
        $b = array('aa' => 'ee', 'bb' => 'rr', 'ff', 'gg');
        var_dump(array_replace($a, $b));
    }

    /**
     * param $needle
     * param $array
     * param [$strict]
     * reutn bool|mix
     * 如果想要返回所有的对应键需要用array_keys（）本函数只会返回第一个匹配的键
     */
    public static function array_search()
    {
        $a = array('df', 'fjdk', 'dfkjdk');
        var_dump(array_search('df', $a));
        var_dump(array_search('jfdkfkfjdkf', $a));
    }
}
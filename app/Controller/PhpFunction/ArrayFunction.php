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
}
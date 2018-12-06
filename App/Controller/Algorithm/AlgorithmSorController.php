<?php

namespace App\Controller\Algorithm;


class AlgorithmSorController
{
    /*
     * 下面四个冒泡算法前三个算法随着顺序优化程度不断提高
     * ，第四个算法复杂度没有变化只是有些分治思想
     */

    /*
     * 普通的冒泡排序
     */
    public function bubbleSort ($arr)
    {
        if (!is_array($arr)) {
            return false;
        }

        $length = count($arr); //这四行代码如果当输入的数组大部分情况下是0,1个元素则可以用空间节省时间（直接返回）
        if ($length <= 1) {    //但是，当大部分情况下是>1个元素时反而多了一次判断（因地制宜）
            return $arr;
        }

        for ($i = 0; $i < $length - 1; $i++) { //当条件为$i < $length时结果也对，只是多执行了两次判断
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }

        return $arr;

    }

    /*
     * 优化的冒泡排序(第二层的对比次数都是第一层上一次的个数减1次）
     */
    public function bubbleSort2 ($arr)
    {
        if (!is_array($arr)) {
            return false;
        }

        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }

        for ($i = 0; $i <= $length - 2; $i++) {
            $flag = 0;
            for ($j = 0; $j <= $length - $i -2; $j++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    $flag = 1;
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $tmp;
                }
            }
            if ($flag == 0) {
                break;
            }
        }
        return $arr;
    }

    /*
     * 经过更加优化的冒泡排序(第二层的对比次数会越来越少)
     */
    public static function bubbleSor2($arr)
    {
        $length = count($arr);
        $i = $length - 1;
        while ($i > 0) {
            $pos = 0;
            for ($j = 0; $j < $i; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $pos = $j;
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
            $i = $pos;
        }
        return $arr;
    }

    /*
     * 这种虽然有分治法的思想但是并没有得到优化
     */
    public static function bubbleSort3($arr)
    {
        $length = count($arr);
        $low = 0;
        $high = $length - 1;
        while ($low < $high) {
            for ($j = $low; $j < $high; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
            $high--;
            for ($j = $high; $j > $low; $j--) {
                if ($arr[$j] < $arr[$j-1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1] = $tmp;
                }
            }
            $low++;
        }
        return $arr;
    }

    /*
     * 下面是选择排序
     */
    public static function selectSort ($arr)
    {
        if (!is_array($arr)) {
            return false;
        }

        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }

        for ($i = 0; $i < $length - 1; $i++) {
            $max = $i;
            for ($j = $i; $j < $length - 1; $j++) {
                if ($arr[$j] < $arr[$j+1]) {
                    $max = $j + 1;
                }
            }
            if ($max != $i) {
                $tmp = $arr[$max];
                $arr[$max] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        return $arr;
    }

    /*
     * 下面为插入排序
     */
    public static function insertSort ($arr)
    {
        if (!is_array($arr)) {
            return false;
        }

        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }

        for ($i = 1; $i < $length; $i++) {
            $insert = $arr[$i];
            for ($j = $i; $j >=0; $j--) {
                if ($arr[$j - 1] > $arr[$j]) {
                    $arr[$j] = $arr[$j - 1];
                } else {
                    $arr[$j] = $insert;
                    break;
                }
            }
        }

        return $arr;
    }

    /*
     * 快速排序
     */
    public static function quickSort(&$arr, $low, $high)
    {
        if (($high - $low) > 0 && $low < $high) {
            $middle = self::partision($arr, $low, $high);
            self::quickSort($arr, $low, $middle-1);
            self::quickSort($arr, $middle+1, $high);
        }
    }

    public static function partision(&$arr, $low, $high) {
        while ($low < $high) {
            while ($low < $high && $arr[$high] > $arr[$low]) $high--;
                self::swap($arr, $low, $high);
            while ($low < $high && $arr[$high] > $arr[$low]) $low++;
                self::swap($arr, $low, $high);
        }
        return $low;
    }

    public static function swap(&$arr, $i, $j)
    {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }

    /*
     * 归并排序
     */
    public static function mergeSort ($arr)
    {
        if (!is_array($arr)) {
            return false;
        }

        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }
        $middle = floor($count / 2);
        $left = self::mergeSort(array_slice($arr, 0, $middle));
        $right = self::mergeSort(array_slice($arr, $middle));
        return self::merge($left, $right);
    }

    public static function merge ($left, $right)
    {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] <= $right[0]) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }
        return array_merge($result, $left, $right);
    }
}
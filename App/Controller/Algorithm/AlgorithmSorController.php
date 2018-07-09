<?php

namespace App\Controller\Algorithm;


class AlgorithmSorController
{
    public static function bubbleSort($arr)
    {
        $length = count($arr);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
        }
        return $arr;
    }

    public static function bubbleSortTwo($arr)
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

    public static function bubbleSortThree($arr)
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

    public static function quickSort(&$arr, $low, $high)
    {
        if ($low < $high) {
            $middle = self::partision($arr, $low, $high);
            self::quickSort($arr, $low, $middle-1);
            self::quickSort($arr, $middle+1, $high);
        }
        return $arr;
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
}
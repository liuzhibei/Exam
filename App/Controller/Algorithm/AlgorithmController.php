<?php

namespace App\Controller\Algorithm;


class AlgorithmController
{
    static function intRev($int)
    {
        $min = -pow(2, 31);
        $max = pow(2, 31);
        if (!(is_int($int) && $int > $min && $int < $max)) {
            return 'Invalid data';
        }
        $isPositive = $int >= 0 ? true : false;
        $str = strval($int);
        $strrev = $isPositive ? strrev($str) : '-' . strrev($str);
        $result = intval($strrev);
        if (!($result > $min && $result < $max)) {
            return 0;
        }
        return $result;

    }

    static function zuidahuiwenzichuan($str)
    {
        if (!(is_string($str) && strlen($str) > 1)) {
            return 'Invalid data';
        }
        $max = 0;
        $result = '';
        $length = strlen($str) - 1;
        for ($i = 0; $i < $length; $i++) {
            $j = $i+1;
            while ($index = strpos($str, $str[$i], $j)) {
                $substrLen = $index - $i + 1;
                $substr = substr($str, $i, $substrLen);
                if ($substr == strrev($substr) && $substrLen > $max) {
                    $result = $substr;
                    $max = $substrLen;
                }
                $j = $index + 1;
            }
        }
        return $result ? $result : '无';
    }
}
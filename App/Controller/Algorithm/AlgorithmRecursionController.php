<?php

namespace App\Controller\Algorithm;


class AlgorithmRecursionController
{
    /**
     * @desc 1步，2步上阶梯问题
     */
    public static function upstairs($n)
    {
        if ($n == 1) return 1;
        if ($n == 2) return 2;
        return self::upstairs($n - 1) + self::upstairs($n - 2);
    }
}